<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    public function index() {
       
        $list = Todo::all();
        return view('index')->with('list',$list);
    }
    public function view (Todo $id) {
        
        
        return view ('view')->with('lists', $id);
    }
    public function create () {
       return view('create');
    }
    public function create_post (Request $r) {
       $validateData = $r->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $task = new Todo;
        $task->name = $r->name;
        $task->description = $r->description;
        $task->save();
        session()->flash('success','Task created successfully');
        return view('create');
    }
    public function edit ($id){
        $task = Todo::find($id);
        return view('edit')->with('task', $task);
    }

    public function update (Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $task =  Todo::find($request->id);
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();

        return redirect('/');

    }

    public function delete ($id) {
        $task = Todo::find($id) ;
        $task->delete();
        return redirect('/');
    }
}
