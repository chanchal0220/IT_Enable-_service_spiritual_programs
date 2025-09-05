<?php
session_start();

$productid =  $_GET['id'];


include_once("conn.php");




if(!isset($_SESSION['login'])){

  header("location:login.php?id='$productid'");

}




$sql = "SELECT *  FROM productitem WHERE pid='$productid'";
$result = $conn->query($sql);



?>






<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
                                <a class="nav-link    text-uppercase  px-4 " href="becomepatner.html">Service</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link    text-uppercase  px-4 " href="contact.html"> Shop</a>
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

<section class="banner__section__contact">
    <div class="container pt-5 ">
        <div class="row pt-5  mt-5 align-items-center">
            <div class="col-lg-6 pt-5">
                <div class="banner__info">
                 <h6 class="text-white">contact us</h6>
                 <h2 class="text-white">Get In Touch.</h2>
                
                </div>
            </div>
        </div>
    </div>
</section>

    
    
    <!-- form -->
    
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
   
    
    <section>
    
            <div class="row contact__form mt-5 pt-4">
                <h4 class="primary-textcolor mb-3">Order</h4>
                <div class="col-lg-6">
                    <form action="#" method="POST" class="row g-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control"  name="name"   placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="last"   placeholder="Last  Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="mobile"  placeholder="Mobile No">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control"  name="address"   placeholder="Address">
                        </div>
                        <div class="col-md-6">
                        <input type="text" class="form-control"  name="city" placeholder="city">
                        </div>
                        
                        <div class="col-md-6">
                        <input type="text" class="form-control"   name="pincode" placeholder="pincode">
                        </div>
                        
                        <div class="col-md-12">
                        <input type="text" class="form-control"  name="cardnum" placeholder="cardnumber">
                        </div>
                        <div class="col-md-6">
                        <input type="date" class="form-control" name="date"  placeholder="date">
                        </div>
                        
                        <div class="col-md-6">
                        <input type="date" class="form-control" name="exdate"  placeholder="expriy date">
                        </div>
                        <div class="col-md-6">
                        <input type="text" class="form-control"  name="cvnum" placeholder="cvc">
                        </div>
                        <div class="col-md-6">
                        <input type="text" class="form-control"  name="zcode" placeholder="zip code">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                           
                           <input type="submit" name="submit">
                           
                           </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <section class="footer mt-5 pt-5">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/mainlogo.jpeg" alt="" class="img-fluid" width="100">
                    <p class="text-white mt-2">Online Services For Spiritual Programs.
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


            <div class="contact__info bg-white border my-5">
                <div class="row py-3">
                    <div class="col-md-4">
                        <div class="contact__card p-3  d-flex align-items-center justify-content-center">
                            <div class="icon me-3">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="info">
                                <p class="primary-textcolor">
                                    +(02) 0114-9912-318 <br>

                                    +(02) 0111-7457-354</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact__card p-3  d-flex  align-items-center justify-content-center">
                            <div class="icon me-3">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="info">
                                <p class="primary-textcolor"> Hello@example.com
                                    <br>
                                    support@yourwebsite.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact__card p-3  d-flex align-items-center   justify-content-center">
                            <div class="icon me-3">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="info">
                                <p class="primary-textcolor">US - Los Angeles 5135 - 4234
                                    <br>
                                    In The Center Street Name Here
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-white my-3">© 2023 All Rights Reserved By Msquresoftware.in</p>
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


</html>


<?php
$pid =$productid;
$uid = $_SESSION['login'];
 
 echo $uid;
if(isset($_POST['submit'])){


 $name = $_POST['name'];
  $last = $_POST['last']; 
  $mobile = $_POST['mobile']; 
  $address = $_POST['address'];
  $city =$_POST['city'];
  $pincode = $_POST['pincode'];
   $cardnum= $_POST['cardnum'];
    $date = $_POST['date'];
     $exdate = $_POST['exdate'];
  $cvnum= $_POST['cvnum'];
   $zcode = $_POST['zcode'];
   
 $sql = " INSERT INTO `orders`( `pid`, `uid`, `name`, `lastname`, `mobile`, `address`, `pincode`, `cardnumber`, `date`, `exdate`, `cvnum`, `zcode`) VALUES
  ('$pid','$uid','$name','$last','$mobile','$address','$pincode','$cardnum','$date','$exdate','$cvnum','$zcode')
";


$conn->query($sql);

}
?>