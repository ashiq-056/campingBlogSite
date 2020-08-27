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
            <div class="col-md-8">

                <?php

                    if(isset($_POST['submit'])){

                        $search = $_POST['search'];

                        $query = "SELECT * FROM post WHERE post_tags LIKE '%$search%' ";
                        $search_query = mysqli_query($connection , $query);

                        if(!$search_query){

                            die("Failed" . mysqli_error($connection));

                        }
                        $c=mysqli_num_rows($search_query);
                        if($c == 0){
                            echo "NO";
                        }
                        else{

                            while($row = mysqli_fetch_assoc($search_query)){

                                $post_title = $row['post_title'];
                                $post_author = $row['post_author'];
                                $post_date = $row['post_date'];
                                $post_image = $row['post_image'];
                                $cost = $row['cost'];
                                $post_content = $row['post_content'];
                                $camp_place = $row['camp_place'];
                                $camp_time = $row['camp_time'];
                       
                                ?>

                                <h1 class="page-header">
                                    Page Heading
                                    <small>Secondary Text</small>
                                </h1>

                                <!-- First Blog Post -->
                                <h2>
                                 <a href="#"><?php echo $post_title; ?></a>
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
                
                
                        }

                    }
                
                ?>
                    


                
            
             </div>

        <!-- Blog Sidebar Widgets Column -->

 <?php 

    include "include/sidebar.php";

?>
            



        </div>
        <!-- /.row -->
    </div>

        <!-- Side Widget Well -->
    <div class="well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>

    </div>

</div>
    <!-- /.row -->

    1<hr>

<?php 

    include "include/footer.php";

?>

        
