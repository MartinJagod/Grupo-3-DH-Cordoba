<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\friend;
use App\user;
class solicitudController extends Controller
{
  //Esta funcion controla si ya existe la solicitud o de no ser asi carga una solicitud//
  public function solicitud ($id){
    $ususarioLogeado=Auth::user();
    $idUsuarioLog= $ususarioLogeado['id'];
     $friendship=friend::where('id_user1','=',$idUsuarioLog)->
    orwhere('id_user2','=',$idUsuarioLog)->get();
    $amigos=[];
   foreach ($friendship as $value) {
      $amigos[] = $value["id_user1"];
      $amigos[] = $value['id_user2'];
    };
    $amigos= array_unique($amigos);

    if (in_array($id, $amigos)) {
    echo("Ya solicitaste amistad a este usuario"); exit; return redirect('/home');}
    else {
    $usuario= Auth::user();
    $solicitar= new friend();
      $solicitar->id_user1=$usuario->id;
      $solicitar->id_user2= $id;
      $solicitar->status=0;
      $solicitar->save();
      }
      return redirect('/home');

  }
}
