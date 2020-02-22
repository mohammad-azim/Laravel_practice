@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card-header">
    LIST PAGE
     <a href="/lists/create" class="btn btn-primary btn-sm float-right @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>New List</a>
	</div>
	   <div class="row" style="margin-top: 5px;">
		  @foreach($lists as $list)
		  <div class="col-sm-4" style="margin-top: 5px;">
		    <div class="card">
		      	<div class="card-body text-center" style=" background-color:#fff; max-height: 120px; min-height: 120px;">
		        	<h1 class="card-title" style="margin-top: 20px;"><a href="/sublists/{{$list->id}}">{{$list->name}}</a></h1>
		      	</div>
		      	<div class="card-header text-center">
	      			<a href="#" onclick="deleteList('{{$list->id}}')" class="btn btn-danger">Delete</a>
					<a href="/lists/{{$list->id}}/edit" class="btn btn-primary">Edit</a>
				</div>
		    </div>
		  </div>
		  @endforeach
		</div>
</div>
<!-- js -->
<script>
function deleteList(id) {
	if(confirm("Are you sure to delete?")){
		window.location.href="/lists/"+id+"/destroy";
	}
}
</script>
@endsection