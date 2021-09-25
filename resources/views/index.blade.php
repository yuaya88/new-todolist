@extends('layouts.default')
@section('title','Todo List')
@section('content')
<form action="/todo/create" class="todo_create" method="POST">
  {{csrf_field ()}}
  <input type="text" class="todo_content" name="content">
  <button type='submit' class="addition_btn">追加</button>
</form>
@if(count($errors) > 0)
　<ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
  </ul>
@endif

<table class="todo_all">
  <tr class="todolist">
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>

  @foreach($todos as $todo)
  <tr class="todo_form">
    <th class="created_at">{{$todo->created_at}}</th>
    
    <form action="{{ route('todo.update', ['id' => $todo->id]) }}" method="POST">
      {{ csrf_field() }}
      <th><input type="text" class="new_content" name="content" value="{{$todo->content}}"></th>
      <th><button type="submit" class="btn_edit">更新</button></th>
    </form>

    <form action="{{ route('todo.delete', ['id' =>$todo->id]) }}" method="POST">
      {{ csrf_field() }}
      <th>
        <button type="submit" class="btn_delete" name="content">削除</button>
      </th>
    </form>
  </tr>
  @endforeach
</table>
@endsection