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

    <div class="container">
       <div class="jumbotron">
           <h1>How to display / Fetch Data in Laravel</h1>
        <hr>
         <div class="line" style="text-align:right;">
              <a href="/studentadd" class="btn btn-primary">ADD Student Data</a>
         </div><br>
          <form>
               <table class="table table-bordered">
                  <thead class="thead-dark">
                       <tr>
                           <th>Student ID</th>
                           <th>Student Name</th>
                           <th>Student Number</th>
                           <th>Student Course</th>
                           <th>Student Address</th>
                            <th> EDIT </th>
                            <th> DELETE </th>
                       </tr>
                    </thead>
                     <tbody>
                         @foreach ($student as $row)
                           <tr style="background: white;">
                           <td>{{$row->id}}</td>
                           <td>{{$row->stud_name}}</td>
                           <td>{{$row->stud_number}}</td>
                           <td>{{$row->stud_course}}</td>
                           <td>{{$row->stud_address}}</td>
                           <td>
                           <a href="click_edit/{{$row->id}}" class="btn btn-success">Edit</a>
                           </td>
                           <td>
                            <a href="/click_delete/{{$row->id}}" class="btn btn-danger">DELETE</a>
                           </td>
                           </tr>
                         @endforeach
                    </tbody>
               </table>
          </form>
       </div>
    </div>
</body>
</html>