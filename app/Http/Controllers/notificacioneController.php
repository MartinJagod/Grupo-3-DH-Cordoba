<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\friend;
use App\user;

class notificacioneController extends Controller
{

    public function notificacion(){
      $ususarioLogeado=Auth::user();
      $idUsuarioLog= $ususarioLogeado['id'];
      $friends=friend::where('id_user2','=',$idUsuarioLog)->get();
      $amigo=[];
      foreach ($friends as $value) {
        $id=$value{'id_user1'};
        $amigo[]=user::find($id);  }
      return view ('notificaciones',compact('amigo'));  }


      public function respuestasolicitud ($resp, $id){
        $id=(int)$id;
          $usuario= Auth::user();

          $idUsuarioLog= $usuario['id'];

          $respSolicitar=friend::where('id_user2','=',$idUsuarioLog)
          ->where('id_user1','=',$id)->get();

          $numeroSoli=$respSolicitar[0]['id'];

          if ($resp==1) {
            $solicitar=friend::find($numeroSoli);

            $solicitar->status=1;
            $solicitar->save();
          }else {
            if ($resp==2) {
            $solicitar=friend::find($numeroSoli);
            $solicitar->status=3;
            $solicitar->save();
          }
          return redirect ('/notificacion');};
        }


}
