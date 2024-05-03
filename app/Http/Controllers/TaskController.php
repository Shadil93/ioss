<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

use Illuminate\Support\Facades\DB;



class TaskController extends Controller
{
    //
    public function todoap(){
        return view('user.todoap');
    }
    public function do_todoap(Request $request){
        $request->validate([
         
          'title'=>'required',
          'description'=>'required',
          'status'=>'required',
        ]);
        Task::create([
           'title'=>$request->title,
           'description'=>$request->description,
           'status'=>$request->status,

        ]);
        return redirect()->route("view");

    }
    public function view(Request $request){
        $data = Task::paginate(10);
        return view('user.view',compact('data'));
     
    }
    public function edit($id){
        $data =Task::find($id);
        return view('user.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $dd =Task::find($id);
        $dd->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);
        return redirect()->route('view');
    }
    public  function delete($id){
        Task::find($id)->delete();
        return redirect()->route('view');
}


public function search(){
    return view('user.search');
}

public function do_search(Request $request){
    $search = $request->input('search');
    $data = Task::where('title','like','%' .$search. '%')
    ->orwhere('description','like','%'.$search .'%')
    ->paginate(12);
    return view('user.view',compact('data'));

 }
 public function title(){
    $data = DB::table('tasks')->select('*')->orderBy('title','asc')->paginate(10);
    return view('user.view',compact('data'));
 }
 public function created_at(){
    $data = DB::table('tasks')->select('*')->orderBy('created_at','asc')->paginate(10);
    return view('user.view',compact('data'));
 }
  
}
