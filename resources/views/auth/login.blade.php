@extends('layouts.app')

@section('content')

   <div class="text-center">
       <h1>Login</h1>
   </div>
   {!! Form::open(['route' => 'login.post']) !!}
       
       <div class="Form-group">
           {!! Form::label('email' , 'Email') !!}
           {!! Form::email('email' , old('email') , ['class' => 'form-control']) !!}
       </div>
       
       <div class="Form-group">
           {!! Form::label('password' , 'Password') !!}
           {!! Form::password('password' , ['class' => 'form-control']) !!}
       </div>
       
       {!! Form::submit('Login' , ['class' => 'btn btn-primary btn-block mt-4']) !!}
    {!! Form::close() !!}
    <p class=" mt-2 ">New user ? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
   
@endsection