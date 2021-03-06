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
    <link href="{{ URL::asset('/css/stylish-portfolio.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/121aa0023c.js"></script>
</head>

<body">

    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="#">Menu</a>
            </li>
            <li><a href="{{ Route('students.index') }}">Home</a>
            </li>
            <li><a href="#about">About</a>
            </li>
            <li><a href="#services">Goals</a>
            </li>
            <li><a href="#portfolio">List of Students</a>
            </li>
            <li><a href="{{ Route('students.create') }}">Add Student</a>
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

    <!-- Services -->
    <div id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>University Goals</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-graduation-cap"></i>
                        <h4>Academic Excellence</h4>
                        <p>To develop the knowledge, skills, and attitudes required for a solid and interdisciplinary foundation in the arts, sciences, and humanities.</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-book"></i> 
                        <h4>Holistic Formation</h4>
                        <p>To educate the heads, hearts, and hands of men and women who will serve the faith, promote justice, dialogue with cultures and religions, and care for creation, our common home.</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-sitemap"></i>
                        <h4>Social Engagement</h4>
                        <p>To form men and women for others, who possess a deep sense of leadership and service characterized by discerning and concrete engagement in social issues and by direct service to communities, especially for the poor and those in the peripheries.</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-flag-checkered"></i>
                        <h4>Global Competitiveness</h4>
                        <p>To educate lifelong learners who will continue to equip themselves with competencies that will enable them to work and compete in other knowledge-based economies and societies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Services -->

    <!-- Callout -->
    <div class="callout">
        <div class="vert-text">
            <h1>Experience Excellence</h1>
        </div>
    </div>
    <!-- /Callout -->

    <!-- Portfolio -->
    <div id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>List of Students</h2>
                    <hr>
                </div>
            </div>
            <div class="container-table">
                <table class="table table-hover">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Number</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Middle Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Address</th>
                        <th scope="col">Year Level</th>
                        <th scope="col">Course</th>
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
                            <td name="lastname">{{$students->middlename}}</td>
                            <td name="lastname">{{$students->lastname}}</td>
                            <td name="birthdate">{{$students->birthdate}}</td>
                            <td name="address">{{$students->address}}</td>
                            <td name="year_level">{{$students->year_level}}</td>
                            <td name="course">{{$students->course}}</td>
                            <td><a href="{{ route('students.edit', $students->id_number)}}" class="btn btn-primary btn-block" id="ed-del-btn">View</a></td>
                            <td><form action="{{ route('students.destroy', $students->id_number)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-block" id="ed-del-btn">Delete</button>
                            </form></td>
                        @endforeach
                    </tbody>
              </table>
              
              </table>
              
            </div>
        </div>
    </div>
    <!-- /Portfolio -->

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
