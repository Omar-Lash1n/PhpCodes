<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Make new Post</h2>
  <form action="/posts/creation" method="post">
    @csrf
    <div class="form-group">
      <label for="ptitle">Post Title:</label>
      <input type="text" class="form-control" id="ptitle" placeholder="Enter Title" name="ptitle">
    </div>
    <div class="form-group">
      <label for="pcontent">Post Content:</label>
      <input type="text" class="form-control" id="pcontent" placeholder="Enter Content" name="pcontent">
    </div>
    <button type="submit" class="btn btn-default">Submit Post</button>
  </form>
</div>

</body>
</html>
