<!DOCTYPE html>
<html>
<head>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
</head>
    <body>
        <div class="container" >
        <form method="post" action="/uploadfile" enctype="multipart/form-data" id="validate">
             @csrf  
             <div class="form-group mt-4">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label>Choose file</label>
                <input type="file" class="form-control" name="image">
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div>
                <button class="btn btn-primary">submit</button>
              </div>                
        </form>
    </div>

      <div class="card-body text-center">
    <h5 class="card-title">Go to home page</h5>
    <a href="/" class="btn btn-primary">Back to homes</a>
  </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
        {!! JsValidator::formRequest('App\Http\Requests\UploadRequest', '#validate') !!}
        </script>
        
    </body>
</html>
