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
    <h1>Please Login</h1>

    @include('common.errors')

    {!! csrf_field() !!}

    <input type="text" style="display:none">
    <input type="password" style="display:none">

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember" style="width: 1em"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
    <p>Don't have an account yet? <a href="<?=config('app.basePath')?>auth/register">Register</a></p>
</form>

@endsection