<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Category || Second App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
  <h2>New Category</h2>
  <div class="row">
    <div class="col-sm-4">
      <form method="POST" action="/store_category">
        <label>Category Name</label>
        @csrf
        @error('categoryname')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" value="{{ old('categoryname') }}" name="categoryname" class="form-control @error('categoryname') is-invalid @enderror" />
        <button type="submit" class="btn btn-info mt-4">Submit</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>

