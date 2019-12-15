<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\friend;
class solicitudController extends Controller
{
  public function solicitud ($id){

    $usuario= Auth::user();
    $solicitar= new friend();
      $solicitar->id_user1=$usuario->id;
      $solicitar->id_user2= $id;
      $solicitar->status=0;
      $solicitar->save();

      return redirect('/home');

  }
}
