<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Arsha Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" type="text/css" rel="stylesheet">
  <link href="custum.css" type="text/css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
  <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
          </div>

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="http://localhost/arsha">Home</a></li>
          <li><a href="http://localhost/arsha/post.php">POST</a></li>
          <li><a href="http://localhost/arsha/category.php">CATEGORY</a></li>
          <li><a href="http://localhost/arsha/users.php">USERS</a></li>
          <li><a href="http://localhost/arsha/emi-loan-calculator.php">CALCULATOR</a></li>
        </ol>
        <form action="user-table.php " method="GET"  style="padding: 0; margin:0;">
        <div class="row">
              <div class="col-md-8">
                  <h2 class="admin-heading">All Categories</h2>
              </div>
              <div class="col-md-2">
                <a class="add-new btn" href="add-category.php">Add category</a>
            </div>


             </form>
             </div>

        

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">

    <style>
 .content-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px; 
  margin-bottom: 20px; 
  font-family: 'Open Sans', sans-serif; 
}

.content-table thead th {
  padding: 12px 15px;
  text-align: left;
  background-color: rgba(40, 58, 90, 0.9); 
  color: #fff; 
}

.content-table tbody td {
  border-top: 1px solid #ddd; 
  padding: 10px 15px;
 
}

.content-table tbody tr:nth-child(even) {
  background-color: #f3f5fa; 
}

.content-table tbody tr:hover {
  background-color: #e0e0e0; 
}

.content-table tbody td a {
  color: inherit; 
}

/* .content-table tbody td:first-child,
.content-table thead th:first-child {
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px; 
}

.content-table tbody td:last-child,
.content-table thead th:last-child {
  border-top-right-radius: 6px; 
 border-bottom-right-radius: 6px; 
} */


/*--------------------------------------------------------------
  pagination links
  --------------------------------------------------------------*/
  .pagination {
    display: flex;
    justify-content: center;
  }
  .pagination a:hover{

  background-color: rgba(40, 58, 90, 0.9);
  }
  

  .pagination a{
    display: flex;
    justify-items: space-evenly;
    
    
    
    top: 0;
    right: 0;
    bottom: 0;
    border: 0;
    margin: 2px;
    background: none;
    font-weight: bold;
    font-size: 16px;
    padding: 10px 20px;
    background: #47b2e4;
    color: #fff;
    transition: 0.3s;
    margin-top: 10px;
    border-radius: 50px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.add-new{
  display: flex;
    justify-items: space-evenly;
    
    
    
    top: 0;
    right: 0;
    bottom: 0;
    border: 0;
    margin: 2px;
    background: none;
    font-weight: bold;
    font-size: 16px;
    padding: 10px 20px;
    background: #47b2e4;
    color: #fff;
    transition: 0.3s;
    margin-top: 10px;
    border-radius: 50px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);

}

   

    </style>
    <div id="admin-content">
    <div class="container">
        <div class="row">
           
            
            <div class="col-md-12">
            <?php
                include "config.php";
                $limit = 3;
 
                if(isset($_GET['page'])){
                  $page = $_GET['page'];
                }else{
                  $page = 1;
                }
                $offset = ($page - 1) * $limit;

                $sql = "SELECT * FROM category  LIMIT {$offset},{$limit}";
                $result = mysqli_query($conn,$sql) or die("Query Failed.");
                if (mysqli_num_rows($result)>0){

                ?>
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                    <?php
                         while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                              <td class='id'><?php echo $row['category_id'];?> </td>
                              <td><?php echo $row['category_name'] ;?></td>
                              <td><?php echo $row['post']; ?></td>  
                              <td class='edit'><a href='update-category.php?id=<?php echo $row["category_id"]; ?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-category.php?id=<?php echo $row["category_id"]; ?>'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <?php
                          }
                           ?>

                    </tbody>
                </table>
                <?php
                } 
                $sql1 = "SELECT * FROM category";
                $result1 = mysqli_query($conn,$sql1) or die ("query failed");

                if(mysqli_num_rows($result1)>0){
                  $total_records = mysqli_num_rows($result1);  
                  $total_page = ceil($total_records / $limit );

                  echo '<ul class="pagination admin-pagination">';
                  if($page>1){
                    echo '<li><a href ="category.php?page='.($page-1).'">prev</a></li>';
                  }

                  
                  for ($i = 1; $i <= $total_page; $i++) {
                    if($i == $page){
                      $active = "active";
                    }else{
                      $active = "";
                    }
                    echo '<li class=" '.$active.'"><a href = "category.php?page='.$i.'">'.$i.'</a></li>';

                  }
                  if($total_page > $page){
                    echo '<li><a href ="category.php?page='.($page+1).'">next</a></li>';
                  }
                  
                  echo '</ul>';
                }      



                ?>

              
            </div>
        </div>
    </div>
</div>
    

      <!-- <div class="container">
      <table class="content-table ">
    <thead>
        <tr>
            <th>S.No.</th>
            <th>Full Name</th>
            <th>User Name</th>
            <th>Role</th>
            <th>Reg. date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class='id'>1</td>
            <td>John Doe</td>
            <td>johndoe</td>
            <td>admin</td>
            <td>2024-03-24</td>
            <td class='edit'><a href='update-user.php?id=1'><i class='fa fa-edit'></i></a></td>
            <td class='delete'><a href='delete-user.php?id=1'><i class="fa-regular fa-trash-can"></i></a></td>
        </tr>
        <tr>
            <td class='id'>2</td>
            <td>Jane Smith</td>
            <td>janesmith</td>
            <td>normal</td>
            <td>2024-03-24</td>
            <td class='edit'><a href='update-user.php?id=2'><i class='fa fa-edit'></i></a></td>
            <td class='delete'><a href='delete-user.php?id=2'><i class="fa-regular fa-trash-can"></i></a></td>
        </tr>
        <tr>
            <td class='id'>2</td>
            <td>Jane Smith</td>
            <td>janesmith</td>
            <td>normal</td>
            <td>2024-03-24</td>
            <td class='edit'><a href='update-user.php?id=2'><i class='fa fa-edit'></i></a></td>
            <td class='delete'><a href='delete-user.php?id=2'><i class="fa-regular fa-trash-can"></i></a></td>
        </tr>
        <tr>
            <td class='id'>2</td>
            <td>Jane Smith</td>
            <td>janesmith</td>
            <td>normal</td>
            <td>2024-03-24</td>
            <td class='edit'><a href='update-user.php?id=2'><i class='fa fa-edit'></i></a></td>
            <td class='delete'><a href='delete-user.php?id=2'><i class="fa-regular fa-trash-can"></i></a></td>
        </tr>
       
    </tbody>
</table>

 </div> -->
    </section>


    
    



  </main> <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Arsha</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>