@extends('layouts.main')
@section('title', 'Sign up')
@section('content')
<div class="box">
        <form action="{{route('register')}}" method="POST">
            <h2>Register</h2>
            @csrf
            <input type="text" name="name" placeholder="Name" value="">
            @if($errors->has('name'))
                <span class="text-danger">{{  $errors->first('name')}}</span>
            @endif
            <input type="text" name="username" placeholder="username" value="">
            @if($errors->has('username'))
                <span class="text-danger">{{  $errors->first('username')}}</span>
            @endif
            <input type="text" name="email" placeholder="email" value="">
            @if($errors->has('email'))
                <span class="text-danger">{{  $errors->first('email')}}</span>
            @endif
            <input id="password" type="password" class="form-control" name="password" placeholder="password" required autocomplete="current-password">
            @if($errors->has('password'))
                <span class="text-danger">{{  $errors->first('password')}}</span>
            @endif
            <input id="password" type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required autocomplete="current-password">
            @if($errors->has('password'))
                <span class="text-danger">{{  $errors->first('conf')}}</span>
            @endif
            <input type="submit" value="Register">
            <div class="login-group">
            <p>have an account ?</p>
            <a href="/login">login</a>
        </div>
    </div>
@endsection