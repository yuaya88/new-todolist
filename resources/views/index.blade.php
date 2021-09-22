@extends('layouts.default')
@section('title','Todo List')
@section('content')
<form action="/" method="POST">
  @csrf
  <input type="text" name="content" class="todo_content">
  <button type='submit' name='content'>追加</button>
  @if(count($errors) > 0)
  　<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
  @endif

  <table>
    <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
    </tr>
    @foreach($todos as $todo)
    <tr>
      <th>{{$todo->created_at}}</th>
      <th>{{$todo->content}}</th>
    </tr>
    @endforeach

  </table>
  

  <td>

  </td>
  </tr>

</form>
</table>
@endsection