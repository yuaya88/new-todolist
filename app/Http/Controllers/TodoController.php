<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos =ToDo::all();
        return view('todos.index')->with('todos',$todos);
    }

    public function create(Request $request)
    {

    }
    


    public function update(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }
}
