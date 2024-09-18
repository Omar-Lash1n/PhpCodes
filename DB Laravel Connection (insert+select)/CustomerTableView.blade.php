<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Our Customers</h2>
  <p>We Love What we Do.</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($custs as $row)
     <tr>
        <td>{{$row->name}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->password}}</td>
     </tr>
     @endforeach
    </tbody>
  </table><br><br>
  <a href="/customer/form">Back to insert more.</a>
</div>

</body>
</html>
