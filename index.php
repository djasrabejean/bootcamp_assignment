<?php
require_once('config/db.php');?>


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

    <link rel="stylesheet" href="style.css">

    <title>Deltabxy | Home</title>
</head>

<body>


<?php
    include("errors.php"); 
    include("success.php");
    include 'config/header.php';
?>





    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/imgs/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/imgs/3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/imgs/1.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

<!-- carousel -->




   
      <!-- Learn Sections -->
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="assets/imgs/4.jpg" style="width:100%; height: 450px;" class="fluid" alt="">
                </div>
                <div class="col-md p-5">
                    <h2>Learn The Fundamentals</h2>
                    <p class="lead">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta repellat consectetur excepturi
                        facilis optio autem cumque officiis corporis. Suscipit ex animi explicabo illum pariatur ipsa?
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, error vero facilis modi,
                        repudiandae quia in, voluptatum at asperiores excepturi ratione quas quam iste iusto alias
                        aliquam vel aut possimus?
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, error vero facilis modi,
                            repudiandae quia in, voluptatum at asperiores excepturi ratione quas quam iste iusto alias
                            aliquam vel aut possimus?
                    </p>
                    <a href="about.php" class="btn btn-light mt-5">
                        <i class="bi bi-chevron-right"></i> Read More
                    </a>
                </div>
            </div>
        </div>
    </section>

    
  
    <!-- Boxes -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <h2>Our Courses</h2>

                <div class="container my-5">
         <div class="row">
         <?php
                $query="SELECT * FROM Course ORDER BY date DESC LIMIT 3";
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
            <a href="course.php" class="btn btn-light mt-5">
                <i class="bi bi-chevron-right"></i> View more
            </a>
        </div>
    </section>

    

    <section id="learn" class="p-5 bg-dark text-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col-md p-5">
                    <h2>Admission</h2>
                    <p class="lead">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta repellat consectetur excepturi
                        facilis optio autem cumque officiis corporis. Suscipit ex animi explicabo illum pariatur ipsa?
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, error vero facilis modi,
                        repudiandae quia in, voluptatum at asperiores excepturi ratione quas quam iste iusto alias
                        aliquam vel aut possimus?</p>
                    <a href="admission.php" class="btn btn-light mt-5">
                        <i class="bi bi-chevron-right"></i> Apply
                    </a>
                </div>
                <div class="col-md">
                    <img src="assets/imgs/admission.jpg" style="width:100%; height: 450px;" class="fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Question Accordion -->
    <section id="questions" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush" id="questions">
                <!-- Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-One">
                            Where exactly are you located??!!.
                        </button>
                    </h2>
                    <div id="question-One" class="accordion-collapse collapse" data-bs-parent="questions">
                        <div class="accordion-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum nihil voluptatum amet
                            expedita placeat inventore soluta voluptas mollitia quidem facere! Sit quae reprehenderit
                            autem voluptates odio vel tempore id ullam a. Sint hic at magnam eos asperiores harum ut
                            facilis modi atque tempora non illum assumenda cumque incidunt culpa deleniti quaerat quae
                            adipisci error eius quibusdam delectus, neque debitis amet?
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-two">
                            How much does it cost to attend??!!.
                        </button>
                    </h2>
                    <div id="question-two" class="accordion-collapse collapse" data-bs-parent="questions">
                        <div class="accordion-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum nihil voluptatum amet
                            expedita placeat inventore soluta voluptas mollitia quidem facere! Sit quae reprehenderit
                            autem voluptates odio vel tempore id ullam a. Sint hic at magnam eos asperiores harum ut
                            facilis modi atque tempora non illum assumenda cumque incidunt culpa deleniti quaerat quae
                            adipisci error eius quibusdam delectus, neque debitis amet?
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-three">
                            What do i need to know??!!.
                        </button>
                    </h2>
                    <div id="question-three" class="accordion-collapse collapse" data-bs-parent="questions">
                        <div class="accordion-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum nihil voluptatum amet
                            expedita placeat inventore soluta voluptas mollitia quidem facere! Sit quae reprehenderit
                            autem voluptates odio vel tempore id ullam a. Sint hic at magnam eos asperiores harum ut
                            facilis modi atque tempora non illum assumenda cumque incidunt culpa deleniti quaerat quae
                            adipisci error eius quibusdam delectus, neque debitis amet?
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-four">
                            How Do I sign Up??!!.
                        </button>
                    </h2>
                    <div id="question-four" class="accordion-collapse collapse" data-bs-parent="questions">
                        <div class="accordion-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum nihil voluptatum amet
                            expedita placeat inventore soluta voluptas mollitia quidem facere! Sit quae reprehenderit
                            autem voluptates odio vel tempore id ullam a. Sint hic at magnam eos asperiores harum ut
                            facilis modi atque tempora non illum assumenda cumque incidunt culpa deleniti quaerat quae
                            adipisci error eius quibusdam delectus, neque debitis amet?
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-five">
                            Do you help me to find djob??!!.
                        </button>
                    </h2>
                    <div id="question-five" class="accordion-collapse collapse" data-bs-parent="questions">
                        <div class="accordion-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum nihil voluptatum amet
                            expedita placeat inventore soluta voluptas mollitia quidem facere! Sit quae reprehenderit
                            autem voluptates odio vel tempore id ullam a. Sint hic at magnam eos asperiores harum ut
                            facilis modi atque tempora non illum assumenda cumque incidunt culpa deleniti quaerat quae
                            adipisci error eius quibusdam delectus, neque debitis amet?
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <section id="instructors" class="p-5 bg-primary">
        <div class="container">
            <h2 class="text-center text-white">Our Instructors</h2>
            <p class="lead text-center text-white mb-5">
                Our Instructors All Have 5+ Years Working As A Web Developer In The Industry
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3"
                                alt="">
                            <h3 class="card-title mb-3">John-crisuss.N</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi
                                veritatis voluptas earum! Voluptatem facere animi, distinctio labore mollitia voluptas
                                exercitationem!</p>

                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/11.jpg" class="rounded-circle mb-3"
                                alt="">
                            <h3 class="card-title mb-3">Celestine-D.N</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi
                                veritatis voluptas earum! Voluptatem facere animi, distinctio labore mollitia voluptas
                                exercitationem!</p>

                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-circle mb-3"
                                alt="">
                            <h3 class="card-title mb-3">Bansoula-R.N</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi
                                veritatis voluptas earum! Voluptatem facere animi, distinctio labore mollitia voluptas
                                exercitationem!</p>

                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/12.jpg" class="rounded-circle mb-3"
                                alt="">
                            <h3 class="card-title mb-3">Loria Remadji.N</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi
                                veritatis voluptas earum! Voluptatem facere animi, distinctio labore mollitia voluptas
                                exercitationem!</p>

                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact & Map -->
    <section class="p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <h2 class="text-center mb-4">Contact Info</h2>
                    <ul class="list-group-flush lead">
                        <li class="list-group-item">
                            <span class="fw-bold">Main Location</span> 50 Main st Boston MA
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Enrollment phone</span> (+235) 666-374-081
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Stuend Phone</span> (+254) 666-524-276
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Enrollment Email:</span> johncrisuss@gmail.com
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Student Email:</span> Ndoradoumnguendoryam@gmail.com
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <div id="map">

                    </div>
                </div>
            </div>
        </div>
    </section>



      <!-- Newsletter -->
      <section class="bg-primary text-light p-5">

        
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
                    <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>
                    <form method="POST">
                        

                        <div class="input-group news-input">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" />
                            <button class="btn btn-dark btn-lg" type="" name="newsletterSubmit">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        
    </section>


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