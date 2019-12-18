<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
class ControllerPosts extends Controller
{

    public function index(){
        $posts = Post::orderBy('id','desc')->get();
        $postes=[];
        foreach($posts as $post){
          $postes[]=[
                  'text_post'=> $post->text_post,
                  'usuario'=> $post->user->name
                 ];
        }
      
        return $postes;
    }
    
    public function store(Request $pos){

        // dd('hola');
        if (!$pos->ajax()) return redirect('/home');
        $post = new Post();
        $post->text_post=$pos->posteo;
        $post->user_id_post=$pos->id_user;
        
        $post->save();
    } 


    public function devolverUser(Request $request){

        $postes=Post::find($request->idus);
        // dd($postes->user);
    
        return $postes;
    }
}
