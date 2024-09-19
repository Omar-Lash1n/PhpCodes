<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Update Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
        <h2>Update Post</h2>
        <form action="/posts/update/{{$post->id}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="ptitle">Post Title:</label>
            <input type="text" class="form-control" value="{{$post->post_title}}" id="ptitle" placeholder="Enter Title" name="ptitle">
        </div>
        <div class="form-group">
        <label for="pcontent">Post Content:</label>
        <input type="text" class="form-control" value="{{$post->post_content}}" id="pcontent" placeholder="Enter Content" name="pcontent">
        </div>
        <button type="submit" class="btn btn-default">Update Post</button>
    </form>
</div>

</body>
</html>
