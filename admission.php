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
    


        <title>Deltabxy | Admission</title>
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
            <h1>Admission</h1>
        </div>
    </header>
    <?php
        include("errors.php"); include("success.php");
    ?>
        


     <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h2 class="text-center mb-4"> Deltabxy Admission Form</h2>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="">Choose...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>

                        <div class="mb-3">
                            <label for="passportId" class="form-label">Passport</label>
                            <input type="file" class="form-control" id="passportId" name="passportId" required>
                        </div>

                        <div class="mb-3">
                            <label for="documents" class="form-label">Documents</label>
                            <input type="file" class="form-control" id="documents" name="documents" required>
                        </div>

                        <div class="mb-3">
                            <label for="courseId" class="form-label">Applying for School</label>
                            <select class="form-select" id="courseId" name="courseId" required>
                                <option value="">Choose...</option>
                                <?php
                                    // Fetch courses from the database
                                    $query = "SELECT * FROM Course ORDER BY date DESC";
                                    $result = mysqli_query($con, $query);
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['name']) . '</option>';
                                    }
                                ?>
                            </select>
                        </div>

                        <button type="submit" name="AdmissionSubmit" class="btn btn-primary w-100">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
     


    
    <!-- Newsletter -->
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>

                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Enter Email" />
                    <button class="btn btn-dark btn-lg" type="button">
                        <i> Subcribe </i> 
                    </button>
                </div>
            </div>
        </div>
    </section>  <br> <br>



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