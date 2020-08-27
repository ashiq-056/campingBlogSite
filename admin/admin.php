<?php

    session_start();
  
  if(($_SESSION['user_role'])=="admin" || $_SESSION['user_role']=="author"){

    include "include/ad_header.php";

    ?>
    
    
      <div class="container-scroller">
    
    <?php
    
      include "include/ad_navigation.php";
    
    ?>
    
        <!-- partial:partials/_navbar.html -->
        
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->

            



              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <h1 class="text-muted text-center text-sm-left d-block d-sm-inline-block">Welcome <?php echo $_SESSION['user_name'] ?>.</h1> 
              </div>

              
            <div class="mt-5">
              <h2 style="text-align:center">User Profile Card</h2>

              <div class="card">

              <?php

                  if($_SESSION['user_role']=='admin'){

                    echo '<img src="../images/IMG-20190601-WA0000.jpg" alt="John" style="width:100%">';

                  }
                  else{

                   echo '<img src="../images/644140.jpg" alt="John" style="width:100%">';

                  }

              ?>

                
                
                <p class="mt-4 title"><?php echo $_SESSION['user_fname'] .' ' . $_SESSION['user_lname'] ?></p>
                <p> <?php echo $_SESSION['user_email'] ?></p>
                <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat iusto necessitatibus amet, rerum incidunt, sunt nihil animi odio voluptatibus architecto nostrum quidem, nesciunt ullam nisi tenetur vero quasi eveniet magnam.</p>
                <div style="margin: 24px 0;">
                  <a href="#"><i class="fa fa-dribbble"></i></a> 
                  <a href="#"><i class="fa fa-twitter"></i></a>  
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <?php
                      if($_SESSION['user_role']=='admin'){
                       
                       echo ' <a href="https://www.facebook.com/profile.php?id=100010219328067"><i class="fa fa-facebook"></i></a> ';
                       
                      }
                      else{
                        echo ' <a href="#"><i class="fa fa-facebook"></i></a> ';
                      }
                  ?>
                 
                </div>

                <p><button>Contact</button></p>
              </div>
            </div>

    
                    
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
    
    <?php
    
      include "include/ad_footer.php";
    
    ?>
    

      <?php

  }
  else {

    header('Location:../Blog.php');

  }

?>

