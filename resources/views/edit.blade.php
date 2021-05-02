<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Xavier University Profiles</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    

    <!-- Add custom CSS here -->
    <link href="{{ URL::asset('css/stylish-portfolio.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/121aa0023c.js"></script>
    <!-- <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet"> -->
</head>

<body>

    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="#">Menu</a>
            </li>
            <li><a href="/">Home</a>
            </li>
            <li><a href="#about">About</a>
            </li>
            <li><a href="#services">Goals</a>
            </li>
            <li><a href="{{ Route('students.index') }}">List of Students</a>
            </li>
            <li><a href="{{ Route('students.create') }}">Add</a>
            </li>
            <li><a href="{{ ('/logout') }}">Log out</a>
            </li>
        </ul>
    </div>
    <!-- /Side Menu -->

    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        <div class="vert-text">
            <h1 style="color: #283971;">Xavier University</h1>
            <h3 style="color: #283971;">
                <em>Ateneo</em>
                <em>de</em> Cagayan</h3>
            <a href="#about" class="btn btn-default btn-lg">About the School</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Intro -->
    <div id="about" class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2>Xavier University</h2>
                    <p class="lead">is a Filipino, Catholic and Jesuit University forming leaders of character for the needs of Mindanao, the Philippines and Asia-Pacific</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Intro -->

    <!-- Callout -->
    <div class="callout">
        <div class="vert-text">
            <h1>Experience Excellence</h1>
        </div>
    </div>
    <!-- /Callout -->

    <!-- Call to Action -->
    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h3>Edit Student</h3>
                    <!--<a href="#" class="btn btn-lg btn-primary">Back to top</a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- /Call to Action -->

    <!-- Map -->
    <div id="contact" class="map"> 
      <form action="{{ route('students.update', $student->id_number) }}" method="post">
      <div class="container2">
        @csrf
        @method('PATCH')
            <label>ID Number </label>
            <input type="text" name="id_number" id="id_number" class="form-control" value="{{$student->id_number}}" placeholder="ID Number">
            <label>First Name </label>
            <input type="text" name="firstname" id="firstname" class="form-control" value="{{$student->firstname}}" placeholder="First Name">
            <label>Middle Name </label>
            <input type="text" name="middlename" id="middlename" class="form-control" value="{{$student->middlename}}" placeholder="Middle Name">
            <label>Last Name </label>
            <input type="text" name="lastname" id="lastname" class="form-control" value="{{$student->lastname}}" placeholder="Last Name">
            <label>Birthdate </label>
            <input type="date" name="birthdate" id="birthdate" class="form-control" value="{{$student->birthdate}}" placeholder="Birthday">
            <label>Address </label>
            <input type="text" name="address" id="address" class="form-control" value="{{$student->address}}" placeholder="Address">
            <label>Year level </label>
            <input type="text" name="year_level" id="year_level" class="form-control" value="{{$student->year_level}}" placeholder="Year Level">
            <label>Course </label><input type="text" name="course" id="course" class="form-control" value="{{$student->course}}" placeholder="Course">
            <th><button type="submit" class="btn btn-primary btn-block" id="loginbtn">Save User</button></th>
        </div>
        </form>

    </div>
    <!-- /Map -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center logo">
                    <img src="https://slmis.xu.edu.ph/ps/images/logotype.png" alt="Xavier University Logo"/>
                    <hr>
                    <p>Copyright &copy; Xavier University 2021</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/index.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>



