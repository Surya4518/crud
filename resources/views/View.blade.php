<html>
<head></head>
<body>
@if(session()->get('success'))
  <div class="alert alert-success" role="alert">
      {{ session('success')}}
</div>

@endif()
</body>
</html>
