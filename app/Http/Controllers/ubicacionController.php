<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ubicacionController extends Controller
{
  public function ubicar(){
  $archivo=file_get_contents("paises.json");
  $paisesArray=json_decode($archivo,true);

  return view ('ubicacion', compact('paisesArray'));
}}
