<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class Todocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $todos = Todo::all();
        return view('index', ['todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $todo = new todo();
        $form = $request->all();
        unset($form['_token']);
        $todo->fill($form)->save();

        return redirect('/');
    }





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,)
    {


        $this->validate($request, Todo::$rules);

        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->id)->update($form)->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {

        $todo = Todo::find('id', $request->id);
        $todo->delete();
        return redirect('/');
    }
}
