<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class friendsController extends Controller
{
    public function find(){

      $friend=User::where("name","LIKE", "%{$_GET['buscador']}%")
      ->orwhere('surname',"LIKE", "%{$_GET['buscador']}%")
      ->get();
      $vac=compact("friend");
      return view ('friendship',$vac);
    }

    public function requestFriend($id){

      
    }
}
