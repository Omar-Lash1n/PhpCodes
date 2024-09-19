<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Posts Table</h2>
    <p>Our posts informations</p>            
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Post Title</th>
                <th>Post Content</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Other</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pst as $row)
                <tr>
                <td>{{$row->post_title}}</td>
                <td>{{$row->post_content}}</td>
                <td>{{$row->created_at}}</td>
                <td>{{$row->updated_at}}</td>
                <td><a href="/posts/edit/{{$row->id}}" class="btn primary-btn">update</a> <a href="/post/delete/{{$row->id}}" class="btn primary-btn" >delete</a></td>
                </tr>  
            @endforeach 
        </tbody>
    </table>

    <br><br>
    <a href="/posts/form">Insert More Posts</a>
</div>

</body>
</html>
