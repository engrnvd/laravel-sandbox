@extends('layouts.app')

@section('content')

    <h2>Person: {{$person->name}}</h2>

    <ul class="list-group">

        <li class="list-group-item">
            <h4>Id</h4>
            <h5>{{$person->id}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Name</h4>
            <h5>{{$person->name}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Dob</h4>
            <h5>{{$person->dob}}</h5>
        </li>
        <li class="list-group-item">
            <h4>About</h4>
            <h5>{{$person->about}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Is A Good Person</h4>
            <h5>{{$person->is_a_good_person}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Gender</h4>
            <h5>{{$person->gender}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Image</h4>
            <h5>{{$person->image}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Created At</h4>
            <h5>{{$person->created_at}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Updated At</h4>
            <h5>{{$person->updated_at}}</h5>
        </li>
        
    </ul>

@endsection