<?php
    require_once('config/db.php');
?>


<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.html">
    <link rel="stylesheet" href="admission.html">
    <title>Deltabxy</title>
</head>
<body>
    

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
            <div class="container">
                <a href="#" class="navbar-brand">Frontend Bootcamp</a>
    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#leran" class="nav-link">What You'll Learn</a>
                        </li>
                        <li class="nav-item">
                            <a href="#questions" class="nav-link">Questions</a>
                        </li>
                        <li class="nav-item">
                            <a href="#instructors" class="nav-link">Instructors</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        
    <!-- Breadcrumb -->

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>
      
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="admission.html">Admission</a></li>
          <li class="breadcrumb-item"><a href="courses.html">Courses</a></li>
          <li class="breadcrumb-item"><a href="blogs.html">Blogs</a></li>
          <li class="breadcrumb-item"><a href="contact.html">Contact</a></li>
          <li class="breadcrumb-item"><a href="newsletter.html">Newsletter</a></li>


          <!-- <li class="breadcrumb-item active" aria-current="page">Admission</li>
          <li class="breadcrumb-item active" aria-current="page">Courses</li>
          <li class="breadcrumb-item active" aria-current="page">Blogs</li>
          <li class="breadcrumb-item active" aria-current="page">Contact</li>
          <li class="breadcrumb-item active" aria-current="page">Newsletter</li> -->

        </ol>
      </nav>
      
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Admission</li>
          <li class="breadcrumb-item active" aria-current="page">Courses</li>
          <li class="breadcrumb-item active" aria-current="page">Blogs</li>
          <li class="breadcrumb-item active" aria-current="page">Contact</li>
          <li class="breadcrumb-item"><a href="newsletter.html">Newsletter</a></li>
        </ol>
      </nav>
     <!-- Breadcrumb -->




    <!-- <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .newsletter-header {
            background-color: #003366;
            color: white;
            padding: 60px 0;
        }
        .newsletter-card {
            transition: transform 0.3s;
        }
        .newsletter-card:hover {
            transform: translateY(-5px);
        }
        .subscription-form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style> -->
</head>
<body>
    <header class="newsletter-header">
        <div class="container text-center">
            <h1>School Newsletter</h1>
            <p>Stay informed about our school's latest news and events</p>
        </div>
    </header>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2 class="mb-4">Latest Newsletters</h2>
                <div class="row">
                    <!-- Newsletter 1 -->
                    <div class="col-md-6 mb-4">
                        <div class="card newsletter-card">
                            <div class="card-body">
                                <h5 class="card-title">June 2023 Newsletter</h5>
                                <p class="card-text">Highlights from our end-of-year celebrations, summer program announcements, and more!</p>
                                <a href="#" class="btn btn-primary">Read Newsletter</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Newsletter 2 -->
                    <div class="col-md-6 mb-4">
                        <div class="card newsletter-card">
                            <div class="card-body">
                                <h5 class="card-title">May 2023 Newsletter</h5>
                                <p class="card-text">Exam preparation tips, sports day recap, and upcoming events for the last month of school.</p>
                                <a href="#" class="btn btn-primary">Read Newsletter</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Newsletter 3 -->
                    <div class="col-md-6 mb-4">
                        <div class="card newsletter-card">
                            <div class="card-body">
                                <h5 class="card-title">April 2023 Newsletter</h5>
                                <p class="card-text">Spring break highlights, science fair results, and important dates for the coming months.</p>
                                <a href="#" class="btn btn-primary">Read Newsletter</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Newsletter 4 -->
                    <div class="col-md-6 mb-4">
                        <div class="card newsletter-card">
                            <div class="card-body">
                                <h5 class="card-title">March 2023 Newsletter</h5>
                                <p class="card-text">Parent-teacher conference schedule, art exhibition announcement, and community service updates.</p>
                                <a href="#" class="btn btn-primary">Read Newsletter</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Archive Link -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-secondary">View Newsletter Archive</a>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="subscription-form">
                    <h3 class="mb-4">Subscribe to Our Newsletter</h3>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">I am a:</label>
                            <select class="form-select" id="role" required>
                                <option value="">Select your role</option>
                                <option value="parent">Parent</option>
                                <option value="student">Student</option>
                                <option value="teacher">Teacher</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>





         <!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative py-3 mt-5">
        <div class="container">
            <p class="lead">Copyright &copy; 2024 Deltabxy <i>John-crisuss</i> D.J.A.N-9</p>

            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'>
</script>

<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoiam9obi1jcmlzdXNzIiwiYSI6ImNrenEweGp2aTNub3YydW55eW1nOHBwajMifQ.DglQce5UCNWd-6Ns-gXLOA';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-71.060982, 42.35725],
        zoom: 18,
    });
</script>


</body>
</html>