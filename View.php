<?php
include 'db.php';
session_start();
if(!isset($_SESSION['uid'])){
	header("Location:index.php");	
}
if(isset($_POST['View']))
{
    $pid=$_POST['id']; 
    $res=mysqli_query($db,"select * from products where pid='$pid'");
    $row = mysqli_fetch_array($res);
    // echo $row1["urno"];
    
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
        <h1 class="text-center pt-5">Our Product</h1>
        <div class="view_product">
            <div class="row">
                <div class="col-lg-6">
                <?php  echo "<img class='w-100 card-img-top'' src='./products_images/$row[2]'>"; ?>
                </div>
                <div class="col-lg-6 pt-4">
                    <h5 class="mb-0"><?php echo "Product Name: ".$row["pname"]." " ?></h5>
                    <p class="small text-muted"><?php echo "Seller Name: ".$row["sname"] ?></p>
                    <p><?php echo "Description: ".$row["pdes"]." " ?></p>
                    <p><?php echo "Mobile: ".$row["scontact"]." " ?></p>
                    <p><?php echo "email: ".$row["semail"]." " ?></p>
                    <h6>Prize: <samp style="color:red"><?php echo "Price: ".$row["pprice"] ?></samp></h6>
                  <a href="tel:<?php $row["scontact"] ?>"  > <button type="button" class="btn btn-success">Buy Now</button></a>
                   <a href="Shopping.php" > <button type="button" class="btn btn-danger">Back to shopping more</button></a>
                </div>
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
    <!-- <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Courses</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Quizes</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class='bx bxs-chevrons-up'></i>
                    <h4>Rank</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div> -->
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