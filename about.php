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
    


        <title>Deltabxy | About Us</title>
    </head>
<body>
    

        <!-- Navbar -->
    <?php
        include 'config/header.php';
    ?>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb mt-5 pt-5"><br /><br />
        <ol class="breadcrumb"></ol>
    </nav>

    <header class="blog-header">
        <div class="container text-center">
            <h1>About Deltabxy School</h1>
            <p class="lead">Nurturing minds, fostering growth, and building a brighter future.</p>

        </div>
    </header>
    <?php
        include("errors.php"); include("success.php");
    ?>



    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Our Mission</h2>
                <p>At Deltabxy School, we are committed to providing a nurturing and stimulating environment where every student can thrive. Our mission is to inspire a lifelong love of learning, foster critical thinking skills, and nurture well-rounded individuals who are prepared to make positive contributions to society.</p>
            </div>
            <div class="col-lg-6">
                <img src="assets/imgs/student_class.jpg" alt="Students in a classroom" class="img-fluid rounded">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <h3>Excellence in Education</h3>
                <p>Our dedicated faculty and staff are committed to delivering a high-quality education that challenges and inspires students to reach their full potential.</p>
            </div>
            <div class="col-md-4">
                <h3>Inclusive Community</h3>
                <p>We celebrate diversity and foster an inclusive environment where every student feels valued, respected, and supported in their educational journey.</p>
            </div>
            <div class="col-md-4">
                <h3>Innovative Approach</h3>
                <p>We embrace innovative teaching methods and technologies to prepare our students for the challenges and opportunities of the 21st century.</p>
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