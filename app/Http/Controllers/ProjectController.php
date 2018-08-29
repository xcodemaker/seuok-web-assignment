<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\project;


use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        $inputs=$request->input();
        $title=$inputs['title'];
        $description=$inputs['description'];
        $status="pending";
// if (Auth::check())
// {
//     // The user is logged in...
//     $userId = Auth::id();
// }
$user_id = Auth::user()->id;
       $project=new project();
       $project->title=$title;
       $project->description=$description;
       $project->status=$status;
       $project->user_id=$user_id;
       $result=$project->save();
    if($request){
        return view('project.success');

    }else{
      return view('project.create');
    }
//return "hello world";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$project=new project();
        $project=project::all();
        return view("project.ideas")->with(["data"=>$project]);
    }
   // view('project.ideas')
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
