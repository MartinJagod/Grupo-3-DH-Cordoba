<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;

class ubicacionController extends Controller
{

  public function ubicar(){
    $usuario= Auth::user();
    $idUsuarioLog= $usuario['id'];
    $solicitar=user::find($idUsuarioLog);
    if(empty($solicitar->ubicacion)){
  $archivo=file_get_contents("paises.json");
  $paisesArray=json_decode($archivo,true);
  return view ('ubicacion', compact('paisesArray'));}
  else{ return view ('miLugarEnElMundo');}

  }


public function distanceCalculation(Request $rec) {
  $archivo=file_get_contents("paises.json");
  $paisesArray=json_decode($archivo,true);
  foreach ($paisesArray as $value) {
  if ($value['name']==$rec['ubicacion']){
    $point1_lat[]=$value['latlng']['0'];
    $point1_long[]=$value['latlng']['1'];
  }
  }

  $point2_lat= [-31];
  $point2_long=[-64];
  $decimals = 2;
  // Cálculo de la distancia en grados
  $degrees = rad2deg(acos((sin(deg2rad($point1_lat[0]))
  *sin(deg2rad($point2_lat[0])))
  +(cos(deg2rad($point1_lat[0]))
  *cos(deg2rad($point2_lat[0]))
  *cos(deg2rad($point1_long[0]-$point2_long[0])))));
  $distance = $degrees * 111.13384; // 1 grado = 111.13384 km, basándose en el diametro promedio de la Tierra (12.735 km)

  $dondeEstas=$_POST['ubicacion'];
  $usuario= Auth::user();
  $idUsuarioLog= $usuario['id'];

  $solicitar=user::find($idUsuarioLog);
  $solicitar->ubicacion=$dondeEstas;
  $solicitar->save();

  return view ("ubicacionPlanisferio", compact('distance'));
}
}
