
@extends('layouts.app-btsp')

@section('content')

    <h2>Update Profile: {{$profile->name}}</h2>

    @if(count($errors))
        <div class="text-danger">
            <?php pr($errors)?>
        </div>
    @endif

    <form action="/profile/{{$profile->id}}" method="post">

        {{csrf_field()}}

        {{method_field("PUT")}}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$profile->name}}">
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" value="{{$profile->dob}}">
        </div>
        <div class="form-group">
            <label>Is a Good Person?<br>
                <select class="form-control" name="is_a_good_person" id="is_a_good_person">
                    <option value=1 {{$profile->is_a_good_person == "Yes"?"selected":""}}>Yes</option>
                    <option value=0 {{$profile->is_a_good_person == "No"?"selected":""}}>No</option>
                </select>
            </label>
        </div>
        <div class="form-group">
            <label>About <br>
                <textarea class="form-control" name="about" id="about">{{$profile->about}}</textarea>
            </label>
        </div>
        <div class="form-group">
            <label>Gender <br>
                <select class="form-control" name="gender" id="gender">
                    <option {{$profile->gender=='Male'?"selected":""}}>Male</option>
                    <option {{$profile->gender=='Female'?"selected":""}}>Female</option>
                </select>
            </label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>

    </form>

@endsection