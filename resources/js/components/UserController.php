<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    


    public function actualizarUsuario(Request $request){

      
        $ver = User::find($request->id);
    
        $ver->name=$request->name;
        $ver->surname=$request->surname;
        $ver->phone=$request->phone;
        $path=$request->file('photo')->store('users');
        $nombreArchivo=basename($path);
        $ver->photo=$nombreArchivo;
       

        // ->getClientOriginalName();
        $ver->save();
        
        return($request->file('photo')->getClientOriginalName());
        
       
    }

    public function getImagen(Request $request){

        $usuario =  User::findOrFail($request->id);
       

      
       
    }



}
