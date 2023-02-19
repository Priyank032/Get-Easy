<?php
include 'db.php';
session_start();
if(!isset($_SESSION['uid'])){
	header("Location:login.php");	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GetEasy </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style type="text/css">
    .view_product {
        margin: 50px;
        box-shadow: 2px 1px 14px 2px lightgray;
        Border-radius: 20px;
        padding: 20px;
    }
    </style>

</head>

<body>

    <?php include 'header.php';?>
    <script type="text/javascript">
    document.getElementById('index').style.color = '#5fcf80';
    </script>

    <!-- ======= Hero Section ======= -->



    <!-- ======= Why Us Section ======= -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6">
                <img src="portfolio\about.jpg" alt="" srcset="" class="h-10 w-100">
            </div>
            <div class="col-lg-6 Pt-5">
                <h6 class="text-danger pt-5">About Us</h6>
                <h1>Online classifieds for college campuses system</h1>
                <P>A Student Information System, or SIS, is a web-based platform that helps schools and colleges take
                    student data online for easier management and better clarity. That's at its most basic. </P>
                <p>The ability to standardize data formats between divisions means a more unified and clear data readout
                    at a glance, ultimately saving time. Data integrity, privacy, and security can all be protected in
                    an open-access environment.

                    When it comes to student records, an SIS offers high efficiency as all data is automatically
                    organized and stored for easy access whenever it is needed. </p>
                <a href="#">Learn More..</a>
            </div>
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="show-cart table">

                    </table>
                    <div>Total price: $<span class="total-cart"></span></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Order now</button>
                </div>
            </div>
        </div>
    </div>


    </div>
    
    </div>
    </div>

    </div>
    </section><!-- End Why Us Section -->

    </main><!-- End #main -->

    <?php include 'footer.php';?>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>