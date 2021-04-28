<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
    <title>Menu</title>
</head>
<body>
  <div class="row justify-content-center logo">
    <img src="https://slmis.xu.edu.ph/ps/images/logotype.png" alt="Xavier University Logo"/>
</div>
<div class="nav-container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" id="views" aria-current="page" href="#">View</a>
          <a class="nav-link active" id="add/dit" aria-current="page" href="{{ Route('students.create') }}">Add</a>
          <a class="nav-link active" id="add/dit" aria-current="page" href="#">Log Out</a>
          
        </li>
    </div>
    <div class="container-table">
        <table class="table table-hover">
            <thead class="table-light">
              <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Address</th>
                    <th scope="col">Course</th>
                    <th scope="col">Year Level</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($student as $students)
                <tr class="table-active">
                    <th scope="row">{{$loop->iteration}}</th>
                    <td name="username">{{$students->id_number}}</td>
                    <td name="firstname">{{$students->firstname}}</td>
                    <td name="lastname">{{$students->lastname}}</td>
                    <td name="birthdate">{{$students->birthdate}}</td>
                    <td name="address">{{$students->address}}</td>
                    <td name="year_level">{{$students->year_level}}</td>
                    <td name="course">{{$students->course}}</td>
                    <td><a href="{{ route('students.edit', $students->id_number)}}" class="btn btn-primary btn-block" id="loginbtn">Edit</a></td>
                    <td><form action="{{ route('students.destroy', $students->id_number)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-primary btn-block" id="loginbtn">Delete</button>
                    </form></td>
                @endforeach
            </tbody>
      </table>
      </table>
      
    </div>
      <!-- <script src="index.js"></script> -->
</body>
</html>