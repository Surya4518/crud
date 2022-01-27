<!DOCTYPE>
<html>
<head>
        <title>Crud Opration</title>
</head>
<body>
@if(session()->get('success'))
  <div class="alert alert-success" role="alert">
      {{ session('success')}}
</div>

@endif()

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script><nav class="navbar navbar-default">
        <div class="container-fluid">
<h2>crud opration </h2>
</nav>
<form action="{{ route('Crud.store') }}" method="post">
  @csrf
 <div class="col-sm-4">
<label for="exampleInputEmail1">fname<span style="color: red;">*</span></label>
<input type="text" class="form-control" name="fname" required="required">
</div>
<div class="col-sm-4">
<label for="exampleInputEmail1">lname<span style="color: red;">*</span></label>
<input type="text" class="form-control" name="lname" required="required">
</div>
<div class="col-sm-4">
<label for="exampleInputEmail1">address<span style="color: red;">*</span></label>
<input type="text" class="form-control" name="address" required="required">
</div>
<div class="col-sm-4">
<label for="exampleInputEmail1">email<span style="color: red;">*</span></label>
<input type="text" class="form-control" name="email" required="required">
</div>
<div class="col-sm-4">
<label for="exampleInputEmail1">phone<span style="color: red;">*</span></label>
<input type="text" class="form-control" name="phone" required="required">
</div>
<div class="col-sm-4">
<label for="exampleInputEmail1">city<span style="color: red;">*</span></label>
<input type="text" class="form-control" name="city" required="required">
</div>
</div>
<input type="submit" value="submit">
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>