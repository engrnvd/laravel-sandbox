@extends('vendor.crud.common.app')

@section('content')

    <h2>Phone: {{$phone->model}}</h2>

    <ul class="list-group">

        <li class="list-group-item">
            <h4>Id</h4>
            <h5>{{$phone->id}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Model</h4>
            <h5>{{$phone->model}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Manufacturer</h4>
            <h5>{{$phone->manufacturer}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Operating System</h4>
            <h5>{{$phone->operating_system}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Created At</h4>
            <h5>{{$phone->created_at}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Updated At</h4>
            <h5>{{$phone->updated_at}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Release Date</h4>
            <h5>{{$phone->release_date}}</h5>
        </li>
        
    </ul>

@endsection