<?php
    require_once('config/db.php');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="contact.html">
        <link rel="stylesheet" href="admission.html">
    


        <title>Deltabxy | Blog</title>
    </head>
<body>
    

        <!-- Navbar -->
    <?php
        include 'config/header.php';
    ?>


        
    
    <nav aria-label="breadcrumb mt-5 pt-5"><br /><br />
        <ol class="breadcrumb"></ol>
    </nav>

    <header class="blog-header">
        <div class="container text-center">
            <h1>Blog</h1>
        </div>
    </header>
    <?php
        include("errors.php"); include("success.php");
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <!-- Blog Post 1 -->
                    <div class="col-md-6">
                        <div class="card blog-card">
                            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Blog Post Image">
                            <div class="card-body">
                                <h5 class="card-title">Annual Science Fair Success</h5>
                                <p class="card-text">Our students showcased their innovative projects at this year's science fair, impressing judges and visitors alike.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                            <div class="card-footer text-muted">
                                Posted on May 15, 2023 by Admin
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog Post 2 -->
                    <div class="col-md-6">
                        <div class="card blog-card">
                            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Blog Post Image">
                            <div class="card-body">
                                <h5 class="card-title">New Art Installation in School Lobby</h5>
                                <p class="card-text">Local artist collaborates with students to create a stunning mural that brightens our school entrance.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                            <div class="card-footer text-muted">
                                Posted on June 2, 2023 by Art Department
                            </div>
                        </div>
                    </div>
                    
                    <!-- Add more blog posts here -->
                </div>
                
                <!-- Pagination -->
                <nav aria-label="Blog pagination">
                    <ul class="pagination justify-content-center mt-4">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            
            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="sidebar">
                    <h4>Categories</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Academic News</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">School Events</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Student Achievements</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Teacher Spotlight</a></li>
                    </ul>
                    
                    <h4 class="mt-4">Recent Posts</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none">Summer Reading Program Announced</a></li>
                        <li><a href="#" class="text-decoration-none">Robotics Team Wins Regional Competition</a></li>
                        <li><a href="#" class="text-decoration-none">New Cafeteria Menu Unveiled</a></li>
                    </ul>
                    
                    <h4 class="mt-4">Follow Us</h4>
                    <div class="d-flex justify-content-around">
                        <a href="#" class="text-dark"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-linkedin fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php
include 'config/footer.php';
?>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>

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