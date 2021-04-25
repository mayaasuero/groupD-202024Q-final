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
          <a class="nav-link active" aria-current="page" href="#">View</a>
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
                @foreach ($data as $i)
                <tr class="table-active">
                    <th scope="row">1</th>
                    <td name="username">{{$i->id_number}}</td>
                    <td name="firstname">{{$i->firstname}}</td>
                    <td name="lastname">{{$i->lastname}}</td>
                    <td name="birthdate">{{$i->birthdate}}</td>
                    <td name="address">{{$i->address}}</td>
                    <td name="year_level">{{$i->year_level}}</td>
                    <td name="course">{{$i->course}}</td>
                    <td><button type="submit" class="btn btn-primary btn-block" id="loginbtn">Edit</button></td>
                    <td><button type="submit" class="btn btn-primary btn-block" id="loginbtn">Remove</button></td>
                </tr>
                @endforeach
            </tbody>
      </table>
      </table>
      
    </div>

    <div class="nav-container">
      <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Add/Edit User</a>
          </li>
      </div>
      <form action="submit" method="POST">
        @csrf
        <div class="container2">
            <input type="text" name="firstname" id="firstname" class="form-control" value="" placeholder="First Name">
            <input type="text" name="lastname" id="lastname" class="form-control" value="" placeholder="Last Name">
            <input type="text" name="username" id="username" class="form-control" value="" placeholder="Username">
            <input type="date" name="date" id="date" class="form-control" value="" placeholder="Birthday">
            <input type="text" name="address" id="address" class="form-control" value="" placeholder="Address">
            <input type="text" name="yearlevel" id="yearlevel" class="form-control" value="" placeholder="Year Level">
            <input type="text" name="course" id="course" class="form-control" value="" placeholder="Course">
            <input type="text" name="email" id="email" class="form-control" value="" placeholder="Username / email">
            <input type="password" name="password" id="password" value="" class="form-control" placeholder="Password">
            <input type="password" name="password" id="password2" value="" class="form-control" placeholder="Confirm Password">
            <th><button type="submit" onclick="addStudent()" class="btn btn-primary btn-block" id="loginbtn">Add/Edit User</button></th>
        </div>
    </form>
      <!-- <script src="index.js"></script> -->
</body>
</html>