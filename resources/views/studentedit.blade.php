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
    <div class="container">
            <div class="jumbotran">
                <h2>How to edit data in laravel</h2>
                <br/>
            <form action="/update/{{$student[0]->id}}" method="post">
                {{csrf_field()}}
                    <div class="form-group">
                        <label>Student Name</label>
                    <input type="text" class="form-control" id="name" name="stud_name" value="{{$student[0]->stud_name}}" placeholder="Enter Student Name">
            
                    </div>
                    <div class="form-group">
                        <label>Student Mobile Number</label>
                        <input type="text" class="form-control" id="profile" name="stud_number" value="{{$student[0]->stud_number}}" placeholder="Enter Student Mobile Number">
            
                    </div>
                    <div class="form-group">
                        <label>Student Course</label>
                        <input type="text" class="form-control" id="address" name="stud_course" value="{{$student[0]->stud_course}}" placeholder="Enter Student Course">
            
                    </div>
                    <div class="form-group">
                        <label>Student Address</label>
                        <input type="text" class="form-control" id="city" name="stud_address" value="{{$student[0]->stud_address}}" placeholder="Enter Student Address">
            
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" style="width: 50%;">Update Data</button>
           
                </form>
            <div>
 </div>
</body>
</html>