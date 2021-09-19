@extends('layouts.default')
@section('title','Todo List')
<form action="/" method="POST">
  <input type="text" name="content" class="todo_content">
  @if(count($errors) > 0)
  　<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
  @endif

  <input type="submit" name="追加" class="addition"> @section('content')
  <table>
    <tr>
      <th>作成日</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <td>
        {{$item->getDetail()}}
      </td>
    </tr>
    @endforeach
</form>
</table>