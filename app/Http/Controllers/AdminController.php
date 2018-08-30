<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    private $user;

    public function __construct(User $user)
    {
        $this->middleware('IsAdmin');
        $this->user = $user;
    }
    public function index(){
        return view('administrator.home');
    }
    public function user(){
        //$id= Auth::user()->id;
        $users = $this->user->all();
        // //return view("project.ideas")->with(["data"=>$project]);
         return view('administrator.user')->with(["users"=>$users]);
    }

    public function destroy($id){
        
        $users = $this->user->where('id',$id)->delete();
        $users = $this->user->all();
         return view('administrator.user')->with(["users"=>$users]);
    }
}

