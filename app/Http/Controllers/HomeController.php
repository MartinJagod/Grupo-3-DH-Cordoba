<?php

namespace App\Http\Controllers;
use App\user;
use App\friend;
use Auth;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
     {

       $ususarioLogeado=Auth::user();
       $idUsuarioLog= $ususarioLogeado['id'];
       $friends=friend::where('id_user2','=',$idUsuarioLog)->get();
       $amigo=[];
       foreach ($friends as $value) {
         if ($value{'status'} == 0){$id=$value{'id_user1'};
           $amigo[]=user::find($id); }}
           if (empty($amigo)){$hayNoti=false;} else {$hayNoti=true;};

        return view('home', compact('hayNoti'));
    }
}
