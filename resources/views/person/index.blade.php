@extends('layouts.app')

@section('content')

	<h2>People</h2>

	@include('vendor.crud.common.create-new-link', ['url' => 'person'])

	<table class="table table-striped grid-view-tbl">
	    
	    <thead>
		<tr class="header-row">
			{!!\Nvd\Crud\Html::sortableTh('id','person.index','Id')!!}
			{!!\Nvd\Crud\Html::sortableTh('name','person.index','Name')!!}
			{!!\Nvd\Crud\Html::sortableTh('dob','person.index','Dob')!!}
			{!!\Nvd\Crud\Html::sortableTh('about','person.index','About')!!}
			{!!\Nvd\Crud\Html::sortableTh('is_a_good_person','person.index','Is A Good Person')!!}
			{!!\Nvd\Crud\Html::sortableTh('gender','person.index','Gender')!!}
			{!!\Nvd\Crud\Html::sortableTh('image','person.index','Image')!!}
			{!!\Nvd\Crud\Html::sortableTh('created_at','person.index','Created At')!!}
			{!!\Nvd\Crud\Html::sortableTh('updated_at','person.index','Updated At')!!}
			<th></th>
		</tr>
		<tr class="search-row">
			<form class="search-form">
				<td><input type="text" class="form-control" name="id" value="{{Request::input("id")}}"></td>
				<td><input type="text" class="form-control" name="name" value="{{Request::input("name")}}"></td>
				<td><input type="date" class="form-control" name="dob" value="{{Request::input("dob")}}"></td>
				<td><input type="text" class="form-control" name="about" value="{{Request::input("about")}}"></td>
				<td>{!!\Nvd\Crud\Html::selectRequested(
					'is_a_good_person',
					[ '', 'Yes', 'No' ],
					['class'=>'form-control']
				)!!}</td>
				<td>{!!\Nvd\Crud\Html::selectRequested(
					'gender',
					[ '', 'Male', 'Female' ],
					['class'=>'form-control']
				)!!}</td>
				<td><input type="text" class="form-control" name="image" value="{{Request::input("image")}}"></td>
				<td><input type="text" class="form-control" name="created_at" value="{{Request::input("created_at")}}"></td>
				<td><input type="text" class="form-control" name="updated_at" value="{{Request::input("updated_at")}}"></td>
				<td>@include('vendor.crud.common.search-btn')</td>
			</form>
		</tr>
	    </thead>

	    <tbody>
	    	@forelse ( $records as $record )
		    	<tr>
					<td>{{$record['id']}}</td>
					<td>{{$record['name']}}</td>
					<td>{{$record['dob']}}</td>
					<td>{{$record['about']}}</td>
					<td>{{$record['is_a_good_person']}}</td>
					<td>{{$record['gender']}}</td>
					<td>{{$record['image']}}</td>
					<td>{{$record['created_at']}}</td>
					<td>{{$record['updated_at']}}</td>
					@include( 'vendor.crud.common.actions', [ 'url' => 'person', 'record' => $record ] )
		    	</tr>
			@empty
				@include ('vendor.crud.common.not-found-tr')
	    	@endforelse
	    </tbody>

	</table>

	@include('vendor.crud.common.pagination', [ 'records' => $records ] )

@endsection