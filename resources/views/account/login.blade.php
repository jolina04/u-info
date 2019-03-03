@extends('shared.layout')

@section('title')
    U-INFO - Login
@endsection

@section('content')
    <div>
        <form action="">
            <p>Username: <input type="text"></p>
            <p>Password: <input type="password"></p>
            <input type="submit" value="Sign in">
        </form>
    </div>
@endsection
