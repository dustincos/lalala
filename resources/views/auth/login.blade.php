@extends('layouts.main')
@section('title', 'Login')
@section('content')
<div class="box">
    <form action="{{route('login')}}" method="post">
        <h2>Sign in</h2>
        @csrf
        <input id="username" type="text" class="" placeholder="username" name="username" value="" required autocomplete="current-username">
        @if($errors->has('username'))
                <span class="text-danger">{{  $errors->first('username')}}</span>
            @endif
        <input id="password" type="password" class="" name="password" placeholder="password" required autocomplete="current-password">
        @if($errors->has('password'))
                <span class="text-danger">{{  $errors->first('password')}}</span>
            @endif
        <input type="submit" value="login">
        <div class="login-group">
                <a href="/forgot">Forget password ?</a>
                <a href="/register">Register</a>
        </div>
</div>
</form>
@endsection