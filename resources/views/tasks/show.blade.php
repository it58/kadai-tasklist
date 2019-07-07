@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    
    <table class = "table table-bordered">
        <tr>
            <th>id</th>
            <th>status</th>
            <th>タスク</th> 
        </tr>
        <tr>
            <th> {{ $task->id }} </th>
            <th> {{ $task->status }} </th>
            <th> {{ $task->content }} </th>
        </tr>
    </table>
    
    @if(Auth::id() === $task->user_id)
        {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-light']) !!}
        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    @endif
@endsection