<?php 

    
    

    include "include/db.php";

?>

<?php 

    include "include/header.php";

?>

    <!-- Navigation -->

<?php 

    include "include/navbar.php";

?>

    <!-- Page Content -->

  
    
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-10">

                <?php
                
                    $query = "SELECT *FROM post";
                    $select_all_post = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($select_all_post)){

                       $post_id = $row['post_id'];
                       $post_title = $row['post_title'];
                       $post_author = $row['post_author'];
                       $post_date = $row['post_date'];
                       $post_image = $row['post_image'];
                       $cost = $row['cost'];
                       $post_content = $row['post_content'];
                       $camp_place = $row['camp_place'];
                       $camp_time = $row['camp_time'];
                       
                ?>

                

                <!-- First Blog Post -->
                <h2>
                     <a> </a>
                    <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?> </p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <h2><?php echo $cost; ?></h2>
                <hr>
                <p><?php echo $post_content; ?></p>

                <p><strong>Where:</strong><?php echo $camp_place; ?></p>
                <p><strong>When:</strong><?php echo $camp_time; ?></p>

                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                
                <?php

                    }
                
                ?>


                
            
             </div>

        

 <?php 

    include "include/sidebar.php";

?>
            




    <hr>



        
