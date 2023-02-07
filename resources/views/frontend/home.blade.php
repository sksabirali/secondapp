<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home || Second App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
  <h2>Second App || All Categories</h2>
  <a class="btn btn-info" href="/add_category">Add Category</a>
  <table class="table">	
    <thead>
      <tr>
        <th>Sl No</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($categories as $category)
      <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $category->name }}</td>
        <td><a type="button" class="btn btn-info" href="/edit_category/{{ $category->id }}">Edit</a>&nbsp;
        	<a type="button" class="btn btn-danger" href="/delete_category/{{ $category->id }}">Delete</a></td>
      </tr>
      	@endforeach
    </tbody>
  </table>
</div>
</body>
</html>

