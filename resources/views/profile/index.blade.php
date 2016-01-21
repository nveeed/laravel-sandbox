{{--dd($records)--}}

@extends('layouts.app-btsp')

@section('content')

<h2>Profiles</h2>

<p><a href="/profile/create"><i class="fa fa-plus"></i> Add a New Profile</a></p>

	<table class="table table-striped">
	    
	    <thead>
		<tr>
            {!!\Nvd\Crud\Html::sortableTh("id","profile.index")!!}
            {!!\Nvd\Crud\Html::sortableTh("name","profile.index")!!}
            {!!\Nvd\Crud\Html::sortableTh("dob","profile.index","DOB")!!}
            {!!\Nvd\Crud\Html::sortableTh("gender","profile.index")!!}
            {!!\Nvd\Crud\Html::sortableTh("is_a_good_person","profile.index")!!}
	        <th></th>
		</tr>
		<tr class="search-row">
			<form>
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
				{!!\Nvd\Crud\Html::selectRequested(
					"is_a_good_person",
					[ "", "Yes", "No" ],
					['class'=>'form-control']
				)!!}
			</td>
			<td><button type="submit" class="form-control btn btn-primary">Search</button></td>
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
			@empty
				<tr class="alert alert-warning"><td colspan="6">No records found.</td></tr>
	    	@endforelse
	    </tbody>

	</table>

@endsection