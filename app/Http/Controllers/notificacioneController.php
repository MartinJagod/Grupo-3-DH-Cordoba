<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\friend;
use App\user;

class notificacioneController extends Controller
{
/*Esta funcion busca las solicitudes de amistad*/
    public function notificacion(){
      $ususarioLogeado=Auth::user();
      $idUsuarioLog= $ususarioLogeado['id'];
      $friends=friend::where('id_user2','=',$idUsuarioLog)->get();
      $amigo=[];
      foreach ($friends as $value) {
        if ($value{'status'} == 0){$id=$value{'id_user1'};
          $amigo[]=user::find($id); }}
      return view ('notificaciones',compact('amigo'));  }

/*Esta funcion cambia status de solicitud 0= pendiente, 1=aceptada, 3=rechazada*/
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
            return redirect ('/notificacion');
          }else {
            if ($resp==2) {
            $solicitar=friend::find($numeroSoli);
            $solicitar->status=3;
            $solicitar->save();
          }
          return redirect ('/notificacion');};
        }


}
