@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                LIST PAGE
                 <a href="/lists/create" class="btn btn-primary btn-sm float-right">New List</a>
            	</div>
                <div class="card-body">
                	
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">name</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($lists as $list)
					    <tr>
					      <th scope="row">{{$list->id}}</th>
					      <td>{{$list->name}}</td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection