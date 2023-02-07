<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Category || Second App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
  <h2>Edit Category</h2>
  <div class="row">
    <div class="col-sm-4">
      <form method="POST" action="/update_category/{{ $categories->id }}">
        <label>Category Name</label>
        @csrf
        @method('put')
        <input type="text" name="categoryname" class="form-control" value="{{ $categories->name }}" required />
        <button type="submit" class="btn btn-info mt-4">Update</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>

