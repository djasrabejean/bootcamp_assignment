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
    


        <title>Deltabxy | Contact</title>
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
            <h1>Contact</h1>
        </div>
    </header>
    <?php
        include("errors.php"); include("success.php");
    ?>
        

     
    <!-- Boxes -->
    <section class="p-5" contact-header>
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md pb-3">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Email
                            </h3>
                            <p class="card-text">
                                Use this email to write us <br>
                                johncrisuss@gmail.com
                            </p>
                            <!-- <a href="#" class="btn btn-primary">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md  pb-3">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Phone
                            </h3>
                            <p class="card-text">
                                Contact us on <br>
                                (+235) 666-374-081
                            </p>
                            <!-- <a href="#" class="btn btn-dark">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md  pb-3">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Address
                            </h3>
                            <p class="card-text">
                                Main Location <br>
                                 50 Main st Boston MA
                            </p>
                            <!-- <a href="#" class="btn btn-primary">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- contact forms  -->


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="form-container">
                    <h2 class="text-center">Inquiries</h2>


                    <form method="POST">
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <select class="form-select" id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="admission">Admission Inquiry</option>
                                <option value="courses">Course Information</option>
                                <option value="financial">Financial Aid</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="ContactSubmit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- contact forms  -->
    



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