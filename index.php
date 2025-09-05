<?php


include_once("conn.php");



$sql = "SELECT * FROM productitem";
$result = $conn->query($sql);






?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font aswome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- swipers js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- animation css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- custom css -->

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- header section -->
    <header class="shadow-sm bg-white ">
        <div class="container">
            <nav class="navbar navbar-expand-lg py-4 ">
                <div class="container-fluid px-md-5 ">
                    <!-- <a class="navbar-brand text-white text-capitalize" href="#">DashEFi</a> -->
                    <button class="navbar-toggler  shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars text-dark"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link    text-uppercase  px-4  active" aria-current="page"
                                    href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link    text-uppercase  px-4 " href="about.html">Abouts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link    text-uppercase  px-4 " href="appointment.php">Service</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                              </li> -->
                            <li class="nav-item">
                                <a class="nav-link    text-uppercase  px-4 " href="shop.html"> Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link    text-uppercase  px-4 " href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- banner section -->

    <section class="banner__section">
        <div class="container pt-5 ">
            <div class="row pt-5  mt-5 align-items-center">
                <div class="col-lg-6">
                    <div class="banner__info">
                        <h6 class="text-white position-relative after-line " style="padding-left: 4rem;">WELCOME TO
                            IT Enable Services For Spiritual Programs </h6>
                        <h1 class="text-white fw-bold display-4  py-3">
                            Book Your Pandit Now 
                        </h1>
                        <p class="text-white fw-semibold lh-190"> Every Spiritual Event needs the pandit. Here you can 
                            choose the pandit and book as per your event timings. click this below button to book your pandit
                        </p>
                        <a href="appointment.php" class="btn mt-2">book pandit</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- feature card  -->
    <section class="feature my-5 py-5 ">
        <div class="container">
            <div class="feature__head">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h6 class="text-muted  position-relative after-line "  uppercase style="padding-left: 4rem;"> Shop our best products 
                        </h6>

                        <h2 class="my-3 fw-semibold primary-textcolor ">best selling products </h2>
                    </div>
                    <div class="col-lg-5">
                        <!-- <p class="text-muted">Our Strategies At Work Are The Means By Which To Achieve The Desired
                            Goals, And Achieve Your Goals And Dreams Here</p> -->
                    </div>
                </div>
            </div>

            <div class="feature__card mt-5 ">
                <div class="container">
                    <div class="row">
                    
                    <?php
                    
                    
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                       ?>
                       
                       <div class="col-md-3">
                       <div class="feature__info bg-white shadow px-4  py-5   ">
                       <img src="images/<?php echo $row['pimg'] ?>" class="img-fluid"  >
                       <h6 class="py-4 primary-textcolor fw-semibold"><?php echo $row['pname'] ?></h6>
                       <h5> <?php echo $row['pprice'] ?> </h5>
                       <a href="contact.php?id=<?php echo $row['pid'] ?>" class="btn" >buy</a>
                       </div>
                       </div> 
                       
                       
                       
                       
                       <?php
                       }
                       
                       
                       } else {
                    echo "0 results";
                    }
                    ?>
                    
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

  
    <!-- footer -->
    <section class="footer mt-5 pt-5">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col-md-4"> 
                    <img src="logo.png" alt="" class="img-fluid" width="100">
                    <p class="text-white mt-2">Online Services for Spiritual Programs.
                    </p>
                    <a href="#" class="btn">More Abouts Us</a>
                </div>
                <div class="col-md-4">
                    <h4 class="text-white line mb-3">Company Link</h4>

                    <ul class="list-group">
                        <li class="list-group-item"><a href="#"
                                class="text-decoration-none text-white text-capitalize">abouts</a>
                        </li>
                        <li class="list-group-item"><a href="#"
                                class="text-decoration-none text-white text-capitalize">service</a>
                        </li>
                        <li class="list-group-item"><a href="#"
                                class="text-decoration-none text-white text-capitalize">shop</a>
                        </li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none text-white text-capitalize">
                                contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="text-white line mb-3">Social Link</h4>

                    <div class="footer__icon mt-5">
                        <span> <i class="fa-brands   fa-facebook"></i></span>
                        <span> <i class="fa-brands   fa-twitter"></i></span>
                        <span> <i class="fa-brands   fa-instagram"></i></span>
                    </div>
                </div>
            </div>


            
    </section>

     <div class="scrolltop">
    <i><i class="fa-solid fa-chevron-up"></i></i>
  </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
   <!-- header and scroll js -->
    <script src="js/app.js"></script>
</body>
<script>
    $(document).ready(function () {
        var myClients3 = new Swiper(".testi-slider ", {
            slidesPerView: 1,
            spaceBetween: 0,
            autoHeight: true,
            autoplay: {
                delay: 5000,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                "1000": {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                "800": {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
            }
        });
        var myClients2 = new Swiper(".feature-slider ", {
            slidesPerView: 1,
            spaceBetween: 60,
            autoHeight: true,
            autoplay: {
                delay: 5000,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                "1000": {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                "800": {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
            }
        });

        var myClients = new Swiper(".blog-slider", {
            slidesPerView: 1,
            spaceBetween: 60,
            autoHeight: true,
            autoplay: {
                delay: 5000,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                "1000": {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                "800": {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
            }
        });
    });</script>

</html>