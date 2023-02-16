<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
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



<h1>Basic Form</h1>
<form  action="{{ route('form3_submit') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="mb-3">
<label>Name:</label>
<input type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror "  name="name" value="{{ old('name') }}">

@error('name')
<small class="invalid-feedback">{{ $message }}</small>
@enderror

</div>



<div class="mb-3">
<label>Email:</label>
<input type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
@error('email')
<small class="invalid-feedback">{{ $message }}</small>
@enderror
</div>




<div class="mb-3">
<label>Password:</label>
<input type="password"  class="form-control  @error('password') is-invalid @enderror " name="password" autocomplete="new-password">
@error('password')
<small class="invalid-feedback">{{ $message }}</small>
@enderror
</div>


<div class="mb-3">
<label> Confirm Password:</label>
<input type="password"  class="form-control" name="password_confirmation">
</div>


<div class="mb-3">
<label>Age:</label>
<input type="text"  class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}">
@error('age')
<small class="invalid-feedback">{{ $message }}</small>
@enderror
</div>


<div class="mb-3">
<label>Bio:</label>
<textarea class="form-control @error('bio') is-invalid @enderror " placeholder="Bio" name="bio">{{ old('bio') }}</textarea>
@error('bio')
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
