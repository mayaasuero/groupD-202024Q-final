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
    <script src="https://kit.fontawesome.com/d0ea2fa7ce.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Side Menu -->
    <a id="back-toggle" href="{{ Route('students.index') }}" class="btn btn-primary btn-lg toggle"><i class="fas fa-arrow-left"></i></a>

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
                    <h3>Add Student</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- /Call to Action -->

    <!-- Map -->
    <div id="contact" class="map"> 
      <form action="{{ route('students.store') }}" method="post">
      <div class="container2">
        @csrf
            <input type="text" name="id_number" id="id_number" class="form-control @error('id_number') is-invalid @enderror" value="{{ old('id_number') }}" placeholder="ID Number">
                @error('id_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="text" name="firstname" id="firstname" class="form-control" value="{{ old('firstname') }}" placeholder="First Name">
                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="text" name="middlename" id="middlename" class="form-control" value="{{ old('middlename') }}" placeholder="Middle Name">
                @error('middlename')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="text" name="lastname" id="lastname" class="form-control" value="{{ old('lastname') }}" placeholder="Last Name">
                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="date" name="birthdate" id="birthdate" class="form-control" value="{{ old('birthdate') }}" placeholder="Birthday">
                @error('birthdate')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}" placeholder="Address">
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="text" name="year_level" id="year_level" class="form-control" value="{{ old('year_level') }}" placeholder="Year Level">
                @error('year_level')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="text" name="course" id="course" class="form-control" value="{{ old('course') }}" placeholder="Course">
                @error('course')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <th><button type="submit" class="btn btn-primary btn-block" id="loginbtn">Add Student</button></th>
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



