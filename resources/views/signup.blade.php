<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <!-- <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet"> -->


    <!-- Add custom CSS here -->
    <link href="{{ URL::asset('css/stylish-portfolio.css') }}" rel="stylesheet">
    <!-- <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/121aa0023c.js"></script> -->
    <link href="{{ URL::asset('css/login-style.css') }}" rel="stylesheet">

    <title>Login</title>
 </head>
 
 <body>
  
  <div class="row justify-content-center logo">
    <img src="https://slmis.xu.edu.ph/ps/images/logotype.png" alt="Xavier University Logo"/>
    
</div>
    <div class="container">
        <div class="card">
            <div class="card-body">
              Login your Account
            </div>
        </div>
        <div class="input-group input-group-username" id="yui_3_17_2_1_1619145012988_28">
            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
            <input type="text" name="firstname" id="firstname" class="form-control" value="" placeholder="First name">
        </div>
        <div class="input-group input-group-username" id="yui_3_17_2_1_1619145012988_28">
            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
            <input type="text" name="lastname" id="lastname" class="form-control" value="" placeholder="Lastname">
        </div>
        <div class="input-group input-group-username" id="yui_3_17_2_1_1619145012988_28">
            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
            <input type="text" name="username" id="username" class="form-control" value="" placeholder="Username">
        </div>
        <div class="input-group input-group-password">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" name="password" id="password" value="" class="form-control" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary btn-block" id="loginbtn">Sign up</button>

      
</body>
</html>