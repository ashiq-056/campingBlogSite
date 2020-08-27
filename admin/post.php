<?php

  include "include/ad_header.php";

?>


  <div class="container-scroller">

<?php

  include "include/ad_navigation.php";

?>
<?php

  include "function.php";

?>

    <!-- partial:partials/_navbar.html -->
    
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <h1 class="text-muted text-center text-sm-left d-block d-sm-inline-block">Welcome Author.</h1>
            </div>

        
        
        
        <?php
        
        
          if(isset($_GET['source'])){

            $source = $_GET['source'];

          }
          else{

            $source = '';

          }

          switch($source){

            case 'add_post';
            include "include/add_post.php";
            break;

            case 'edit_post';
            include "include/edit_post.php";
            break;

            case '3';
            echo "helloooooooooo";
            break;

            default:
            include "include/view_post.php";
            break;

          }
        
        
        ?>            





                
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

<?php

  include "include/ad_footer.php";

?>
