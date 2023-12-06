<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index(){
        $todo = Todo::all();
        return view('index')->with('todo', $todo);
    }
    public function create(){
       
        return view('create');
    }
    public function details(Todo $todo){
        return view('details')->with('todos', $todo);
    }
    public function edit($id){
        $data = Todo::find($id);
        return view('edit')->with('todo', $data);
    }

    public function store() {
        try {
            $this->validate(request(),['name'=> ['required']]);
        } catch (ValidationException $th) {
            //throw $th;
        }
        $data = request()->all();
        $todao = new Todo();
        $todao->name = $data['name'];
        $todao->adddate = date('Y-m-d');
        $todao->addtime = date('H:i:s');
        $todao->description = $data['description'];
        $todao->save();
        session()->flash('success', 'Todo created successfully');
        return redirect('/');

    }

    public function update(Request $request) {
       
        try {
            $this->validate(request(),['name'=>'required']);
        } catch (ValidationException $th) {
           
        }

        $todo = Todo::find($request['id']);
        $todo->name = $request['name'];
        $todo->adddate = date('Y-m-d');
        $todo->addtime = date('H:i:s');
        $todo->description = $request['description'];
        $todo->save();
        session()->flash('success','Todo updated successfully');
        return redirect('/');
    }

    public function delete($id) {
        if($id){
            $todo = Todo::find($id);
            $todo->delete();
            session()->flash('success','Todo updated successfully');
            return redirect('/');
        }
    }
}
