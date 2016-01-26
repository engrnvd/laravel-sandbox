@extends('layouts.app')

@section('content')

    <h2>Update Person: {{$person->name}}</h2>

    <form action="/person/{{$person->id}}" method="post">

        {{ csrf_field() }}

        {{ method_field("PUT") }}

        {!! \Nvd\Crud\Form::input('name','text')->model($person)->show() !!}

        {!! \Nvd\Crud\Form::input('dob','date')->model($person)->show() !!}

        {!! \Nvd\Crud\Form::textarea( 'about' )->model($person)->show() !!}

        {!! \Nvd\Crud\Form::select( 'is_a_good_person', [ 'Yes', 'No' ] )->model($person)->show() !!}

        {!! \Nvd\Crud\Form::select( 'gender', [ 'Male', 'Female' ] )->model($person)->show() !!}

        {!! \Nvd\Crud\Form::input('image','text')->model($person)->show() !!}

        <button type="submit" class="btn btn-default">Submit</button>

    </form>

@endsection