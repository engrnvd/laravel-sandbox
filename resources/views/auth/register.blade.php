<?php
/**
 * Created by naveedulhassan.
 * Date: 12/10/15
 * Time: 4:57 PM
 */
?>

@extends('layouts.app')

@section('content')

<form method="POST">
    <h1>Create a New Account</h1>

    @include('common.errors')

    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
    <p>Already have an account? <a href="<?=config('app.basePath')?>auth/login">Login</a></p>
</form>

@endsection