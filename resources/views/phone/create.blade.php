@extends('layouts.app')

@section('content')

    <h2>Create a New Phone</h2>

    <form action="/phone" method="post">

        {{ csrf_field() }}

        {!! \Nvd\Crud\Form::input('model','text')->show() !!}

        {!! \Nvd\Crud\Form::input('manufacturer','text')->show() !!}

        {!! \Nvd\Crud\Form::select( 'operating_system', [ 'Android', 'IOS', 'Windows', 'Other' ] )->show() !!}

        {!! \Nvd\Crud\Form::input('release_date','date')->show() !!}

        <button type="submit" class="btn btn-default">Submit</button>

    </form>

@endsection