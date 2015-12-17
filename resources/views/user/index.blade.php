<?php
/* @var $user \App\User */
/* @var $users_list \App\User[] */
?>
@extends('layouts.app')

@section('content')

    <h1>Welcome <?=$user->name?></h1>

    <p>Here are your details:</p>

    <ul>
        <li>Name: <?=$user->name?></li>
        <li>Email: <?=$user->email?></li>
        <li>Role: <?=$user->role?></li>
    </ul>

    @if (isset($users_list))
        <p>Here is a list of users</p>
        <table class="table table-responsive">
            <thead>
                <tr><th>Name</th><th>Email</th><th>Role</th></tr>
            </thead>
            <tbody>
                @foreach ($users_list as $user)
                    <tr>
                        <td><?=$user->name?></td>
                        <td><?=$user->email?></td>
                        <td><?=$user->role?></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
