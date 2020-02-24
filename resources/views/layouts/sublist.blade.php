@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                YOUR TASKS
                 <a href="/sublists/create/{{$id}}" class="btn btn-primary btn-sm float-right">New List</a>
            	</div>
                <div class="card-body">
                	
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">name</th>
					      <th scope="col">details</th>
					      <th scope="col">created date</th>
					      <th scope="col">priority</th>
					      <th scope="col">actoins</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<tbody>
					  	@foreach ($sublists as $list)
					    <tr @if($list->status == 1): style="color:red" @endif>
					      <td>{{$list->name}}</td>
					      <td>{{$list->details}}</td>
					      <td>{{$list->created_at}}</td>
					      <td>{{$list->priority}}</td>
					      <td>
					      	<a href="#" onclick="deleteList('{{$list->id}}')" class="btn btn-danger">Delete</a>
					      	<a href="/sublists/{{$list->id}}/edit" class="btn btn-primary">Edit</a>
					      	@if($list->status==1)
					      	<a href="#" onclick="undone('{{$list->id}}')" class="btn btn-success">  done! </a>@else 
					      	<a href="#" onclick="workdone('{{$list->id}}')" class="btn btn-success">
					      	work done
					      	@endif
					      	</a>
					      </td>
					    </tr>
					    @endforeach
					  </tbody>
					  </tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- script -->
<script>

function deleteList(id) {
	if(confirm("Are you sure to delete?")){
		window.location.href="/sublists/"+id+"/destroy";
	}
}
//  new function

function workdone(id) {
	if (confirm("Are you sure?")) {
		window.location.href = "/changeStatus/"+id;
	}
}

</script>
@endsection