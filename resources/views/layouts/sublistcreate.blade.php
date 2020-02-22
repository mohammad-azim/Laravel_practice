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
	                  <label>priority</label>
		                <select name="priority" class="form-control" style="width:250px">
		                    <option value="High">High</option>
		                    <option value="Mediam">Mediam</option>
		                    <option value="Low">Low</option>
		                </select>
	            	<input type="hidden" name="memolist_id" value="{{$id}}">
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
	                <button type="submit" class="btn btn-primary">Submit</button>
	        </div>
	    </div>
		</form>
	</div>
@endsection