{{--dd($records)--}}

@extends('layouts.app-btsp')

@section('content')

<h2>Profiles</h2>

<p><a href="/profile/create"><i class="fa fa-plus"></i> Add a New Profile</a></p>

@if ( count($records) )
	<table class="table table-striped">
	    
	    <thead>
            <th>Id</th>
	        <th>Name</th>
	        <th>DOB</th>
	        <th>Gender</th>
	        <th>Is a Good Person</th>
	        <th></th>
	    </thead>

	    <tbody>
	    	@foreach ( $records as $record )
		    	<tr>
		    		<td>{{$record['id']}}</td>
		    		<td>{{$record['name']}}</td>
		    		<td>{{$record['dob']}}</td>
		    		<td>{{$record['gender']}}</td>
		    		<td>{{$record['is_a_good_person']}}</td>
		    		<td>
                        <form class="form-inline" action="/profile/{{$record->id}}" method="POST">
							<a href="/profile/{{$record->id}}"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;

							<a href="/profile/{{$record->id}}/edit"><i class="fa fa-pencil"></i></a>&nbsp;

                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
			    			<button type="submit" class="fa fa-remove text-danger remove-btn"></button>
                        </form>
	    			</td>
		    	</tr>
	    	@endforeach
	    </tbody>

	</table>

@else

	<p class="alert alert-warning">No records found.</p>

@endif


@endsection