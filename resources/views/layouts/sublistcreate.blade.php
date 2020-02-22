@extends('layouts.app')

@section('content')
	<div class="container">
	   	<form action="{{url('/sublists')}}" method="POST">
	    @csrf
	     <div class="row">
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <label>name</label>
	                <input type="text" name="name" class="form-control" placeholder="Name"> <br>
	                 <label>details</label>
	                <input type="text" name="details" class="form-control" placeholder="details"> <br>
	                <div class="dropdown show">
					  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   priority
					  </a>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item select" href="#">High</a>
					    <a class="dropdown-item" href="#">Mediam</a>
					    <a class="dropdown-item" href="#">Low</a>
					  </div>
					</div>
	               <!--  <label>priority</label>
	                <input type="text" name="priority" class="form-control" placeholder="priority">
	            	<input type="hidden" name="memolist_id" value="{{$id}}"> -->
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
	                <button type="submit" class="btn btn-primary">Submit</button>
	        </div>
	    </div>
		</form>
	</div>
@endsection