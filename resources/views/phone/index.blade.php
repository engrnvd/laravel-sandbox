@extends('vendor.crud.common.app')

@section('content')

	<h2>Phones</h2>

	@include('vendor.crud.common.create-new-link', ['url' => 'phone'])

	<table class="table table-striped grid-view-tbl">
	    
	    <thead>
		<tr class="header-row">
			{!!\Nvd\Crud\Html::sortableTh('id','phone.index','Id')!!}
			{!!\Nvd\Crud\Html::sortableTh('model','phone.index','Model')!!}
			{!!\Nvd\Crud\Html::sortableTh('manufacturer','phone.index','Manufacturer')!!}
			{!!\Nvd\Crud\Html::sortableTh('operating_system','phone.index','Operating System')!!}
			{!!\Nvd\Crud\Html::sortableTh('created_at','phone.index','Created At')!!}
			{!!\Nvd\Crud\Html::sortableTh('updated_at','phone.index','Updated At')!!}
			{!!\Nvd\Crud\Html::sortableTh('release_date','phone.index','Release Date')!!}
			<th></th>
		</tr>
		<tr class="search-row">
			<form class="search-form">
				<td><input type="text" class="form-control" name="id" value="{{Request::input("id")}}"></td>
				<td><input type="text" class="form-control" name="model" value="{{Request::input("model")}}"></td>
				<td><input type="text" class="form-control" name="manufacturer" value="{{Request::input("manufacturer")}}"></td>
				<td>{!!\Nvd\Crud\Html::selectRequested(
					'operating_system',
					[ '', 'Android', 'IOS', 'Windows', 'Other' ],
					['class'=>'form-control']
				)!!}</td>
				<td><input type="text" class="form-control" name="created_at" value="{{Request::input("created_at")}}"></td>
				<td><input type="text" class="form-control" name="updated_at" value="{{Request::input("updated_at")}}"></td>
				<td><input type="date" class="form-control" name="release_date" value="{{Request::input("release_date")}}"></td>
				<td style="min-width: 6.1em;">@include('vendor.crud.common.search-btn')</td>
			</form>
		</tr>
	    </thead>

	    <tbody>
	    	@forelse ( $records as $record )
		    	<tr>
					<td>{{$record['id']}}</td>
					<td>{{$record['model']}}</td>
					<td>{{$record['manufacturer']}}</td>
					<td>{{$record['operating_system']}}</td>
					<td>{{$record['created_at']}}</td>
					<td>{{$record['updated_at']}}</td>
					<td>{{$record['release_date']}}</td>
					@include( 'vendor.crud.common.actions', [ 'url' => 'phone', 'record' => $record ] )
		    	</tr>
			@empty
				@include ('vendor.crud.common.not-found-tr',['colspan' => 8])
	    	@endforelse
	    </tbody>

	</table>

	@include('vendor.crud.common.pagination', [ 'records' => $records ] )

@endsection