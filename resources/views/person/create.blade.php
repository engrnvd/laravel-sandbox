@extends('layouts.app')

@section('content')

    <h2>Create a New Person</h2>

    <form action="/person" method="post">

        {{ csrf_field() }}

        {!! \Nvd\Crud\Form::input('name','text')->show() !!}

        {!! \Nvd\Crud\Form::input('dob','date')->show() !!}

        {!! \Nvd\Crud\Form::textarea( 'about' )->show() !!}

        {!! \Nvd\Crud\Form::select( 'is_a_good_person', [ 'Yes', 'No' ] )->show() !!}

        {!! \Nvd\Crud\Form::select( 'gender', [ 'Male', 'Female' ] )->show() !!}

        {!! \Nvd\Crud\Form::input('image','text')->show() !!}

        <button type="submit" class="btn btn-default">Submit</button>

    </form>

@endsection