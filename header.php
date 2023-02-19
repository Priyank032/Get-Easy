<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">GetEasy</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a id='index' href="index.php">Home</a></li>
          <li><a id='index' href="About.php">About</a></li>
          <li><a id='index' href="Contact.php">Contact Us</a></li>
          <li><a id='index' href="Shopping.php">Shopping</a></li>
          <!-- <li><a id='index' href="index.php">Sell</a></li> -->
          <li><a id='index' href="MyAdds.php">My adds</a></li>

          <?php 
            if(!(isset($_SESSION['uid'])))
            {
          ?>
            <li><a id='login' href="login.php">Login</a></li>
            <li><a id='register' href="register.php">Register</a></li>
          <?php
          }
          else
          {
          ?>
            <li><a id='logout' href="logout.php">Logout</a></li>
          <?php
          }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="UploadAds.php" class="get-started-btn">Upload Ads</a>

    </div>
</header><!-- End Header -->