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
    <!-- /Side Menu -->

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
                    <h3>View Student</h3>
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
            <div class="form-group row">
                <label for="id_student" class="col-sm-2 col-form-label">ID Number </label>
                <div class="col-sm-10">
                    <input type="text" name="id_number" id="id_number" class="form-control" value="{{$student->id_number}}" placeholder="ID Number" readonly>
                    @error('id_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="firstname" class="col-sm-2 col-form-label">First Name </label>
                <div class="col-sm-10">
                    <input type="text" name="firstname" id="firstname" class="form-control" value="{{$student->firstname}}" placeholder="First Name">
                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="middlename" class="col-sm-2 col-form-label">Middle Name </label>
                <div class="col-sm-10">
                    <input type="text" name="middlename" id="middlename" class="form-control" value="{{$student->middlename}}" placeholder="Middle Name">
                    @error('middlename')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="lastname" class="col-sm-2 col-form-label">Last Name </label>
                <div class="col-sm-10">
                    <input type="text" name="lastname" id="lastname" class="form-control" value="{{$student->lastname}}" placeholder="Last Name">
                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="birthdate" class="col-sm-2 col-form-label">Birthdate </label>
                <div class="col-sm-10">
                    <input type="date" name="birthdate" id="birthdate" class="form-control" value="{{$student->birthdate}}" placeholder="Birthday">
                    @error('birthdate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address </label>
                <div class="col-sm-10">
                    <input type="text" name="address" id="address" class="form-control" value="{{$student->address}}" placeholder="Address">
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="year_level" class="col-sm-2 col-form-label">Year level </label>
                <div class="col-sm-10">
                    <input type="text" name="year_level" id="year_level" class="form-control" value="{{$student->year_level}}" placeholder="Year Level">
                    @error('year_level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="course" class="col-sm-2 col-form-label">Course </label>
                <div class="col-sm-10">
                    <input type="text" name="course" id="course" class="form-control" value="{{$student->course}}" placeholder="Course">
                    @error('course')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <th><button type="submit" class="btn btn-primary btn-block" id="loginbtn">Save changes</button></th>
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



