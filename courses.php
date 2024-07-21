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
    


        <title>Deltabxy | Courses</title>
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
            <h1>Courses </h1>
        </div>
    </header>
    <?php
        include("errors.php"); include("success.php");
    ?>


     <div class="container my-5">
         <div class="row">
         <?php
                $query="SELECT * FROM Course ORDER BY date DESC";
                $result=mysqli_query($con, $query);
                while($row= $result->fetch_assoc()) {
                    ?>
                        <div class="col-md-4 mb-4">
                            <div class="card course-card">
                                <a href="courses_details.php?id=<?php echo $row['id'] ?>">
                                <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="Course 2">
                                </a>
                                
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['name'] ?></h5>
                                    <p class="card-text"><?php echo substr($row['description'],0, 150) ?>                                    </p>
                                    <a href="courses_details.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>

             
             
             
         </div>
     </div>





        <?php
            include 'config/footer.php';
        ?>  



        
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