@extends('layouts.app')
   
@section('content')
<div class="container">
	  <form action="{{route('sublists.update', $sublist->id)}}"  method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <lable>name</lable>
                    <input type="text" name="name" value="{{$sublist->name}}" class="form-control" placeholder="Name">
                    <lable>details</lable>
                    <input type="text" name="details" value="{{$sublist->details}}" class="form-control" placeholder="details">
                    <lable>priority</lable>
                    <input type="text" name="priority" value="{{$sublist->priority}}" class="form-control" placeholder="priority">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
   
    </form>
</div>  
  
@endsection