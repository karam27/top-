<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Send Email</title>
  </head>
  <body>

<div class="container">

@if ($errors->any())
<div class="alert alert-danger">

<ul>
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</ul>

</div>
@endif



<h1>Send Email</h1>
<form  action="{{ route('form4_submit') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="mb-3">
<label>Name:</label>
<input type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror "  name="name" value="{{ old('name') }}">

@error('name')
<small class="invalid-feedback">{{ $message }}</small>
@enderror

</div>



<div class="mb-3">
<label> message:</label>
<textarea placeholder="Message" class="form-control"  name="message" rows="5"  >{{ old('message') }}</textarea>
@error('message')
<small class="invalid-feedback">{{ $message }}</small>
@enderror
</div>







<div class="text-center">

<button class="btn btn-success w-25 mx-auto ">Send</button>

</div>

</form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
