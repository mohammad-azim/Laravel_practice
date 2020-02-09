@extends('layouts.app')

@section('content')
	<div class="container">
	   	<form action="{{url('/lists')}}" method="POST">
	    @csrf
	     <div class="row">
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Name:</strong>
	                <input type="text" name="name" class="form-control" placeholder="Name">
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
	                <button type="submit" class="btn btn-primary">Submit</button>
	        </div>
	    </div>
		</form>
	</div>
@endsection