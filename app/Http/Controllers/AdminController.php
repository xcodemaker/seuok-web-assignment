<?php

namespace App\Http\Controllers;
use App\User;
use App\project;
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

    public function edit($id){
        
        $users = $this->user->where('id',$id)->first();
         return view('administrator.edit')->with(["users"=>$users]);
    }

    public function update(Request $request, $id){
        
         $inputs=$request->input();
        $userType=$inputs['isAdmin'];
        $users = $this->user->where('id',$id)->update(['isAdmin' => $userType]);
        $users = $this->user->all();
         return view('administrator.user')->with(["users"=>$users]);
    }
    public function ideas(){
        
      $project=project::all();
        return view("administrator.ideas")->with(["data"=>$project]);
    }

    public function ideaEdit($id){
        
        $project=project::where('id', $id)->first();
          return view("administrator.ideaEdit")->with(["data"=>$project]);
      }

      public function accept($id){
        
        $project=project::where('id', $id)->update(['status' => "Accept"]);
        $project=project::all();
        return view("administrator.ideas")->with(["data"=>$project]);
      }

      public function decline($id){
        
        $project=project::where('id', $id)->update(['status' => "Decline"]);
        $project=project::all();
        return view("administrator.ideas")->with(["data"=>$project]);
      }

      public function remove($id){
        
        $project=project::where('id', $id)->delete();
        $project=project::all();
        return view("administrator.ideas")->with(["data"=>$project]);
      }
    
}

