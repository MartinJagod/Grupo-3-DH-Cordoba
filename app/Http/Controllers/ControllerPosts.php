<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ControllerPosts extends Controller
{

    public function index(){
        $posts = Post::all();
        return $posts;
    }
    
    public function store(Request $pos){

        // dd('hola');
        if (!$pos->ajax()) return redirect('/home');
        $post = new Post();
        $post->text_post=$pos->posteo;
        $post->user_id_post=1;
        $post->id_photo=3;
        $post->save();
    } 

}
