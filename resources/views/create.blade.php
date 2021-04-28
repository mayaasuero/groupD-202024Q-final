<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
    <title>Edit/Add</title>
</head>
<body>
  <div class="row justify-content-center logo">
    <img src="https://slmis.xu.edu.ph/ps/images/logotype.png" alt="Xavier University Logo"/>

    <div class="nav-container">
      <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" id="views" aria-current="page" href="{{ Route('students.index') }}">Back to list</a>
          <a class="nav-link active" id="add/dit" aria-current="page" href="{{ Route('students.create') }}">Add</a>
          </li>
      </div>
      <form action="{{ route('students.store') }}" method="post">
      <div class="container2">
        @csrf
            <input type="text" name="id_number" id="id_number" class="form-control" value="" placeholder="ID Number">
            <input type="text" name="firstname" id="firstname" class="form-control" value="" placeholder="First Name">
            <input type="text" name="middlename" id="middlename" class="form-control" value="" placeholder="Middle Name">
            <input type="text" name="lastname" id="lastname" class="form-control" value="" placeholder="Last Name">
            <input type="date" name="birthdate" id="birthdate" class="form-control" value="" placeholder="Birthday">
            <input type="text" name="address" id="address" class="form-control" value="" placeholder="Address">
            <input type="text" name="year_level" id="year_level" class="form-control" value="" placeholder="Year Level">
            <input type="text" name="course" id="course" class="form-control" value="" placeholder="Course">
            <th><button type="submit" class="btn btn-primary btn-block" id="loginbtn">Add User</button></th>
        </div>
        </form>

      <script src="index.js"></script>

      <!-- <script type="text/javascript">
        function myFunction() {
        document.getElementById("add").innerHTML = '<object type="text/html" data="/View.html" ></object>';
        }
        </script> -->
</body>
</html>