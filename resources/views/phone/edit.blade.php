@extends('vendor.crud.common.app')

@section('content')

    <h2>Update Phone: {{$phone->model}}</h2>

    <form action="/phone/{{$phone->id}}" method="post">

        {{ csrf_field() }}

        {{ method_field("PUT") }}

        {!! \Nvd\Crud\Form::input('model','text')->model($phone)->show() !!}

        {!! \Nvd\Crud\Form::input('manufacturer','text')->model($phone)->show() !!}

        {!! \Nvd\Crud\Form::select( 'operating_system', [ 'Android', 'IOS', 'Windows', 'Other' ] )->model($phone)->show() !!}

        {!! \Nvd\Crud\Form::input('release_date','date')->model($phone)->show() !!}

        <button type="submit" class="btn btn-default">Submit</button>

    </form>

@endsection