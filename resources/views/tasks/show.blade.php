@extends('layouts.app')

@section('content')

    <h1>id = {{ $abouttask->id }} のタスク詳細ページ</h1>
    
    <table class = "table table-bordered">
        <tr>
            <th>id</th>
            <th> {{ $abouttask->id }} </th>
        </tr>
        <tr>
            <th>タスク</th>
            <th> {{ $abouttask->content }} </th>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $abouttask->id], ['class' => 'btn btn-light']) !!}
    {!! Form::model($abouttask, ['route' => ['tasks.destroy', $abouttask->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection