
@extends('layouts.app')

@section('content')

    <h1>Error</h1>
    <div class="title">{{$exception->getMessage()}}</div>

@endsection