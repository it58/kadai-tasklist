@extends('layouts.app')

@section('content')

    
    <h1>id: {{ $edittask->id }}のタスク編集ページ</h1>
    
    <div class = "row">
        <div class = "col-6">
            {!! Form::model( $edittask, [ 'route' => [ 'tasks.update', $edittask->id], 'method' => 'put' ]) !!}
                
                <div class = "form-group" >
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div> 
                
                <div class = "form-group" >
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div> 
            
            {!! Form::submit('変更', ['class' => 'btn btn-light']) !!}
            
        {!! Form::close() !!}
        </div>
    </div>
@endsection