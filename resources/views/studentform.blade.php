<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @if(\Session::has('success'))
      <div class="alert">
      <h4>{{\session::get('success')}}</h4>
      </div>
    @endif
    <form action="/add_data" method="post">
        {{csrf_field()}}
    <div class="container">
        <div class="jumbotron" style="margin-top: 5%;">
            <h1> How to insert Data in Laravel </h1>
            <hr>
        <div class="form-group">
            <label>Student Name</label>
            <input type="text" class="form-control" name="stud_name" placeholder="Enter Student Name">

        </div>
        <div class="form-group">
            <label>Student Mobile Number</label>
            <input type="text" class="form-control" name="stud_number" placeholder="Enter Student Mobile Number">

        </div>
        <div class="form-group">
            <label>Student Course</label>
            <input type="text" class="form-control" name="stud_course" placeholder="Enter Student Course">

        </div>
        <div class="form-group">
            <label>Student Address</label>
            <input type="text" class="form-control" name="stud_address" placeholder="Enter Student Address">

        </div>
        <input type="submit" name="submit" class="btn btn-success" value="Save/Insert Data">

        <a href="/studentview" class="btn btn-primary">Back to view</a>
    </div>
</div>

    </form>
</body>
</html>