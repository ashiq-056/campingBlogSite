<?php 

    include "include/ad_header.php";

?>



<?php 

    include "include/ad_navigation.php";

?>
 

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Admin
                    <small>Author</small>
                </h1>

                <div class="col-xs-6">

                <?php

                if(isset($_POST['submit'])){

                    
                    $title = $_POST['title'];

                    // if($title == "" || empty($title)){

                    //     echo "Empty Field";

                    // }
                    // else{

                    //     $query = "INSERT INTO categories(title)";
                    //     $query .= "VALUE('{$title}')";

                    //     $create_category_query = mysqli_qery($connection , $query);
                    //     if(!$create_category_query){
                    //         die('Failed' . mysqli_error($connection));
                    //     }

                    // }
                    
                }

                ?>


                    <form action="" method="post">
                        <div class="form-group">
                            <label for="cat-title">Add Category</label>
                            <input class="form-control" type="text" name="cat_title">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                        </div>
                    </form>
                </div>

                <div class="col-xs-6">

                <?php
    
                    $query = "SELECT * FROM categories";
                    $select_categories = mysqli_query($connection, $query);
                    
                ?>


                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                            </tr>
                        </thead>
                        <tbody>


                        <?php

                            while($row = mysqli_fetch_assoc($select_categories)){
                                $id = $row['id'];
                                $title = $row['title'];
                                echo "<tr>";
                                echo "<td>{$id}</td>";
                                echo "<td>{$title}</td>";
                                echo "</tr>";
                            }

                        ?>

                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "include/ad_footer.php"; ?>