
@extends('layouts.app-btsp')

@section('content')

	<h2>Profiles</h2>

	@include('vendor.crud.common.create-new-link', ['url' => 'profile'])

	<table class="table table-striped grid-view-tbl">
	    
	    <thead>
		<tr class="header-row">
            {!!\Nvd\Crud\Html::sortableTh("id","profile.index")!!}
            {!!\Nvd\Crud\Html::sortableTh("name","profile.index")!!}
            {!!\Nvd\Crud\Html::sortableTh("dob","profile.index","DOB")!!}
            {!!\Nvd\Crud\Html::sortableTh("gender","profile.index")!!}
            {!!\Nvd\Crud\Html::sortableTh("is_a_good_person","profile.index")!!}
	        <th></th>
		</tr>
		<tr class="search-row">
			<form class="search-form">
			<td><input type="number" class="form-control" name="id" value="{{Request::input("id")}}"></td>
			<td><input type="text" class="form-control" name="name" value="{{Request::input("name")}}"></td>
			<td><input type="date" class="form-control" name="dob" value="{{Request::input("dob")}}"></td>
			<td>
				{!!\Nvd\Crud\Html::selectRequested(
					"gender",
					["","Male","Female"],
					['class'=>'form-control']
				)!!}
			</td>
			<td>
				{!! \Nvd\Crud\Html::selectRequested(
					"is_a_good_person",
					[ "", "Yes", "No" ],
					['class'=>'form-control']
				) !!}
			</td>
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
		    		<td>{{$record['gender']}}</td>
		    		<td>{{$record['is_a_good_person']}}</td>
		    		@include( 'vendor.crud.common.actions', [ 'url' => 'profile', 'record' => $record ] )
		    	</tr>
			@empty
				@include ('vendor.crud.common.not-found-tr')
	    	@endforelse
	    </tbody>

	</table>

	@include('vendor.crud.common.pagination', [ 'records' => $records ] )

@endsection