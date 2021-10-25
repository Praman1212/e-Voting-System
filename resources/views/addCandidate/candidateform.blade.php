<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <form action="{{ route('addCandidate.save') }}" method="POST">
        @if (Session::get('success'))
        <div class="alert alert-success">
          {{ Session::get('success') }}
        </div>
          
        @endif
        @if (Session::get('fail'))
          <div class="alert alert-danger">
            {{ Session::get('fail') }}
          </div>
        @endif
        @csrf
          <div class="mb-3">
            <label class="form-label">Candidate Name</label>
            <input type="text" class="form-control" name="cname" id="cname" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label class="form-check-label">Candidate Description</label>
            <input type="text" name="cdetail" class="form-control" id="details">
          </div>
          <div class="mb-3">
            <label class="form-check-label">Candidate Image</label>
            <input type="file" name="cimage" class="form-control" id="image">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form> 
    </div>
</body>
</html>