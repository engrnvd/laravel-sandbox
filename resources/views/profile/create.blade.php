
@extends('layouts.app-btsp')

@section('content')

    <h2>Create a New Profile</h2>

    @if(count($errors))
    <div class="text-danger">
        <?php pr($errors)?>
    </div>
    @endif

<form action="/profile" method="post">

    {{csrf_field()}}

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
        @if ($errors->has('name'))
            <span class="help-block text-danger">
                {{ $errors->first('name') }}
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob" value="{{old('dob')}}">
    </div>
    <div class="form-group">
        <label>Is a Good Person?<br>
            <select class="form-control" name="is_a_good_person" id="is_a_good_person">
                <option value=1>Yes</option>
                <option value=0>No</option>
            </select>
        </label>
    </div>
    <div class="form-group">
        <label>About <br>
            <textarea class="form-control" name="about" id="about">{{old('about')}}</textarea>
        </label>
    </div>
    <div class="form-group">
        <label>Gender <br>
            <select class="form-control" name="gender" id="gender">
                <option>Male</option>
                <option>Female</option>
            </select>
        </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    
</form>

@endsection