<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>

    <div class="row justify-content-center logo">
        <img src="//elearn.xu.edu.ph/pluginfile.php/1/theme_moove/logo/1618131151/XU%20Logotype_Color%20Full%20Blue%202.png" title="Xavier University eLearn" alt="Xavier University eLearn" />
    </div>
    <div class="container">
        <form action="login.php" method="post">
            <div class="card">
                <div class="card-body">
                    Login your Account
                </div>
            </div>
            <div class="input-group input-group-username" id="yui_3_17_2_1_1619145012988_28">
                <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                <input type="text" name="username" id="username" class="form-control" value="" placeholder="Username / email">
            </div>
            <div class="input-group input-group-password">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" name="password" id="password" value="" class="form-control" placeholder="Password">
            </div>
            <input type="submit" class="btn btn-primary btn-block" id="loginbtn" value="Log in">
    </div>
</body>

</html>