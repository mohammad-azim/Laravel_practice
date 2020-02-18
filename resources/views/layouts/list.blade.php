@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card-header">
    LIST PAGE
     <a href="/lists/create" class="btn btn-primary btn-sm float-right">New List</a>
	</div>
	   <div class="row" style="margin-top: 5px;">
		  @foreach($lists as $list)
		  <div class="col-sm-4" style="margin-top: 5px;">
		    <div class="card">
		      	<div class="card-body text-center" style="max-height: 100px; min-height: 100px;">
		        	<h2 class="card-title"><a href="/sublists/{{$list->id}}">{{$list->name}}</a></h2>

		      	</div>
		      	<div class="card-header text-center">
	      			<a href="/lists/{{$list->id}}/destroy" class="btn btn-primary">Delete</a>
					<a href="/lists/{{$list->id}}/edit" class="btn btn-primary">Edit</a>
				</div>
		    </div>
		  </div>
		  @endforeach
		</div>
</div>
@endsection