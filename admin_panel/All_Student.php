<?php
session_start();
require "db.php";
// $_SESSION['college'] ="ipscollege@gmail.com";
if(!isset($_SESSION['college']))
{
    header("location:login.php");
}

if(isset($_POST['Delete']))
    {
          $id = $_POST['id'];

          $sql = "delete from col_users where uid = '$id'";

    $rese=mysqli_query($db,$sql);
    if(!$rese){
        echo "<script>alert('not Deleted Successfully')</script>";
    }else{
        echo "<script>alert('Deleted Successfully')</script>";
       echo '<script> window.location.replace("All_Student.php")</script>';
    }
    }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="register.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css">
    <link rel="stylesheet"
        href="https://rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js">
    </script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js">
    </script>
    <script src="https://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js">
    </script>
    <style>
    .mainadd {
        /* overflow-x: hidden; */
        overflow-y: hidden;
        padding-top: 30px;

    }

    h1 {
        color: rgb(57, 57, 97);
        padding: 12px;
    }

    h3 {
        padding: 7px;
        color: rgb(92, 113, 128);
    }

    h6 {
        padding: 5px;
        color: rgb(112, 37, 37);
    }

    .container {
        width: 1024px;
        padding: 2em;
    }

    .bold-blue {
        font-weight: bold;
        color: #0277BD;
    }
    </style>
</head>

<body>
<?php 
  require("sidebar.php")
  ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to want to logout
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="logout.php" class="btn btn-primary"> Logout</a>
            </div>
        </div>
    </div>
</div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">College</span>
        </div>
       
        <div class="profile-details">
            <img src="data:image/jpeg;base64,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" alt="">
            <span class="admin_name">College Admin</span>
            <i class='bx bx-chevron-down'></i>
        </div>
    </nav>

        <div class="mainadd">
            <div class="container ">


                <h2 class="text-center pt-5">All Students</h2>
                <div id="toolbar">
                    <a href="Add_Student.html" class="btn btn-success">Add Student</a>
                    <!-- <button class="btn btn-primary">Add New Notice</button> -->
                </div>
                <!-- <div id="toolbar">
            <select class="form-control">
              <option value="">Export Basic</option>
              <option value="all">Export All</option>
              <option value="selected">Export Selected</option>
            </select>
          </div> -->

                <table id="table" data-toggle="table" data-search="true" data-filter-control="true"
                    data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar"
                    data-show-pagination-switch="true" data-pagination="true" data-show-columns="true"
                    data-show-columns-toggle-all="true" data-detail-view="true" data-escape="false">
                    <thead>
                        <tr>
                            <!-- <th data-field="state" data-checkbox="true"></th> -->
                            <th data-field="S.no" data-filter-control="input" data-sortable="true">S.No</th>
                            <th data-field="Name" data-filter-control="input" data-sortable="true">Name</th>
                            <th data-field="Enroll No." data-filter-control="input" data-sortable="true">Enroll No.</th>
                  
                            
                            <th data-field="Email" data-filter-control="input" data-sortable="true">Email</th>
                            <th data-field="Course" data-filter-control="input" data-sortable="true">Course</th>
                          
                            <th data-field="Action" data-filter-control="false" data-sortable="false">Action</th>
                            <!-- <th data-field="date" data-filter-control="select" data-sortable="true">Date</th>
                <th data-field="examen" data-filter-control="select" data-sortable="true">Examen</th>
                <th data-field="note" data-sortable="true">Note</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
              $i=1;
              $name= $_SESSION['college'];
              $query = "select * from col_users ";
              $result = mysqli_query($db,$query);
              while( $row = mysqli_fetch_array($result))
              {
                ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['urno']; ?></td>
                            <td><?php echo $row['uname']; ?></td>
                            <td><?php echo $row['uemail']; ?></td>
                            <td><?php echo $row['ucourse']; ?></td>
                            <td>
                                <form action="edit_student.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['uid'] ?>">
                                    <button   type="submit" name="Edit" class="btn btn-primary">Edit</button>
                                </form>

                                <form action="All_Student.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['uid'] ?>">
                                    <button   type="submit" name="Delete" class="btn btn-danger">Delete</button>
                                </form>
                            </td>

                        </tr>
                        <?php
              }
              ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
    //exporte les données sélectionnées
    var $table = $('#table');
    $(function() {
        $('#toolbar').find('select').change(function() {
            $table.bootstrapTable('refreshOptions', {
                exportDataType: $(this).val()
            });
        });
    })

    var trBoldBlue = $("table");

    $(trBoldBlue).on("click", "tr", function() {
        $(this).toggleClass("bold-blue");
    });
    </script>

    <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
    </script>

</body>

</html>