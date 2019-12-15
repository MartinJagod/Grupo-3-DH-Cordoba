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

      $ususarioLogeado=Auth::user();
      $idUsuarioLog= $ususarioLogeado['id'];
       $friendship=friend::where('id_user1','=',$idUsuarioLog)->
      orwhere('id_user2','=',$idUsuarioLog)->get();
      $amigos=[];

        foreach ($friendship as $value) {
          $amigos[] = $value["id_user1"];
          $amigos[] = $value['id_user2'];};

      $elemento=0;
      $idValue=[];
      $amigoDepurado=array_unique($amigos);

      foreach ($friend as $value) {
        $idValue=$value['id'];
      if (in_array($idValue, $amigoDepurado)) {
        $value["status"]=9;
          $friend[$elemento]->$value['status'];}
        $elemento++;}

        return view("friendship",compact('friend'));
    }}
