<?php
include 'db.php';
session_start();
if(!isset($_SESSION['uid'])){
	header("Location:login.php");	
}
if(isset($_POST['delete']))
    {
          $id = $_POST['id'];

          $sql = "delete from products where pid = '$id'";

    $rese=mysqli_query($db,$sql);
    if(!$rese){
        echo "<script>alert('not Deleted Successfully')</script>";
    }else{
        echo "<script>alert('Deleted Successfully')</script>";
       echo '<script> window.location.replace("MyAdds.php")</script>';
    }
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
    .coding_bg {
        background: url('assets/img/background.jpg') top center;
        background-attachment: fixed;
    }
    </style>

</head>

<body>

    <?php include 'header.php';?>
    <script type="text/javascript">
    document.getElementById('index').style.color = '#5fcf80';
    </script>

    <!-- ======= Hero Section ======= -->


    <main id="main">
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row counters">


        </section><!-- End Counts Section -->




        <hr style="width:83%; margin:auto;">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="row">


                    <!-- Main -->
                    <!-- Second Row [Team]-->
                    <h2 class="font-weight-bold mb-2">Your Product</h2>
                    <p class="font-italic text-muted mb-4">In this, Page we have to see all the product,Which you will
                        have to added.</p>

                    <div class="row pb-5 mb-4">
                        <?php
                       $i=1;
                       $uidd= $_SESSION['uid'];
                       $query = "select * from products where uid = '$uidd'";
                      //  $query = "select * from products ";
                       $result = mysqli_query($db,$query);
                       while( $row = mysqli_fetch_array($result))
                       {
                      ?>

                        <div class="col-lg-6 col-md-6 mb-4 mb-lg-0 mt-4 mb-4">
                            <!-- Card-->
                            <div class="card shadow-sm border-0 rounded">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <?php  echo "<img class='w-100 card-img-top'' src='./products_images/$row[2]'>"; ?>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="p-4">
                                            <h5 class="mb-0"><?php echo "Product Name: ".$row["pname"]." " ?></h5>
                    <p class="small text-muted"><?php echo "Seller Name: ".$row["sname"] ?></p>
                    <p><?php echo "Description: ".$row["pdes"]." " ?></p>
                    <p><?php echo "Mobile: ".$row["scontact"]." " ?></p>
                    <p><?php echo "email: ".$row["semail"]." " ?></p>
                    <h6>Prize: <samp style="color:red"><?php echo "Price: ".$row["pprice"] ?></samp></h6>
                                                <form action="All_Student.php" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $row['uid'] ?>">
                                                    <button type="button" class="btn btn-success">Edit</button>
                                                </form>
                                                <form action="MyAdds.php" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $row['uid'] ?>">
                                                    <button type="submit" name="delete"
                                                        class="btn btn-danger">delete</button>
                                                </form>
                                                <!-- <button type="button" class="btn btn-success"><?php echo $row["pname"] ?></button> -->
                                                <!-- <button type="button" class="btn btn-danger"><?php echo $row["pname"] ?></button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
              }
              ?>
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