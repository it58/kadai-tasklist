@extends('layouts.app')

@section('content')

   <div class="text-center">
       <h1>Signup</h1>
   </div>
   
   {!! Form::open(['route' => 'signup.post']) !!}
       <div class="Form-group">
           {!! Form::label('name' , 'Name') !!}
           {!! Form::text('name' , old('name') , ['class' => 'form-control']) !!}
       </div>
       
       <div class="Form-group">
           {!! Form::label('email' , 'Email') !!}
           {!! Form::email('email' , old('email') , ['class' => 'form-control']) !!}
       </div>
       
       <div class="Form-group">
           {!! Form::label('password' , 'Password') !!}
           {!! Form::password('password' , ['class' => 'form-control']) !!}
       </div>
       
       <div class="Form-group">
           {!! Form::label('password_confirmation' , 'confirmation') !!}
           {!! Form::password('password_confirmation' , ['class' => 'form-control']) !!}
       </div>
       
       {!! Form::submit('Sign up' , ['class' => 'btn btn-primary btn-block mt-4']) !!}
    {!! Form::close() !!}
@endsection