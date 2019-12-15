<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\friend;
use Illuminate\Http\Request;


class friendsController extends Controller
{
    public function find(){

      $friend=User::where('name','LIKE', "%{$_GET['buscador']}%")
      ->orwhere('surname','LIKE', "%{$_GET['buscador']}%")
      ->get();
      $vac=compact('friend');
      return view('friendship' , $vac);
    }
/*
 public function controlAmistad($data){
 $ususarioLogeado=Auth::user();
 $idUsuarioLog= $ususarioLogeado['id'];
  $friendship=friend::where('id_user1','=',$idUsuarioLog)->
 orwhere('id_user2','=',$idUsuarioLog)->get();
 $data2=[];
 foreach ($friendship as $value) {
if ($value['id_user1']!=$idUsuarioLog){
   $data2[]=["id_user2"=>$value['id'] , "name"=>$value['name'] , "surname"=>$value['surname']];}

 }



}*/
}
