<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    


    public function actualizarUsuario(Request $request){

        
        $ver = User::find($request->id);
        $imagen=$request->file('file');
       $urlImagen = $imagen->store('public/users');

       $ver->imagen = "users/" . basename($urlImagen);
       $ver->save();
        var_dump($imagen);
        

    }
}
