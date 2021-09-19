<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = ToDo::all();
        return view('todos.index')->with('todos', $todos);
    }

    public function create(Request $request)
    {
    }
    public function store(Request $request)
    {
        $this->validate($request, ToDo::$rules);
        $todo = new todo;
        $todo->fill($request->all());
        $todo->save();
        return view('index', compact('todo'));
    }




    public function update(Request $request)
    {
        $this->validate($request, ToDo::$rules);
        $form = $request->all();
        unset($form['_token']);
        ToDo::where('id', $request->id)->update($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
    }
}
