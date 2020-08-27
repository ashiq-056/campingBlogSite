<?php

    if(isset($_GET['p_id'])){

        $the_post_id = $_GET['p_id'];

    }

    $query = "SELECT * FROM post WHERE post_id = $the_post_id";
    $select_post_by_id = mysqli_query($connection , $query);

    while($row = mysqli_fetch_assoc($select_post_by_id)){
        
        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_content = $row['post_content'];
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_date = $row['post_date'];
        $cost = $row['cost'];
        $camp_place = $row['camp_place'];
        $camp_time = $row['camp_time'];

    }

    if(isset($_POST['update_post'])){

        $post_title = $_POST['post_title'];
        $post_author = $_POST['post_author'];
        $post_status = $_POST['post_status'];
        $post_image = $_FILES['post_image']['name'];
        $post_image_temp = $_FILES['post_image']['tmp_name'];
        $post_tags = $_POST['post_tags'];
        $post_content = $_POST['post_content'];
        $camp_cost = $_POST['camp_cost'];
        $camp_place = $_POST['camp_place'];
        $camp_time = $_POST['camp_time'];

        move_uploaded_file($post_image_temp , "../images/$post_image");
        
        if(empty($post_image)){

            $query = "SELECT * FROM post WHERE post_id = $the_post_id";
            $select_image = mysqli_query($connection , $query);
            
            while($row = mysqli_fetch_array($select_image)){

                $post_image = $row['post_image'];

            }

        }

        $query = "UPDATE post SET ";
        $query .="post_title = '{$post_title}', ";
        $query .="post_author = '{$post_author}', ";
        $query .="post_date = now(), ";
        $query .="post_image = '{$post_image}', ";
        $query .="cost = '{$camp_cost}', ";
        $query .="post_content = '{$post_content}', ";
        $query .="post_tags = '{$post_tags}', ";
        $query .="camp_place = '{$camp_place}', ";
        $query .="camp_time = '{$camp_time}', ";
        $query .="WHERE post_id = {$the_post_id} ";

        $update_post = mysqli_query($connection , $query);

        

    }
        
?>



<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Post Title</label>
        <input value="<?php echo $post_title?>" type="text" class="form-control" name="post_title">
    </div>
    <div class="form-group">
        <label for="title">Post Author</label>
        <input value="<?php echo $post_author?>" type="text" class="form-control" name="post_author">
    </div>
    <div class="form-group">
        <label for="title">Post Status</label>
        <input value="<?php echo $post_status?>" type="text" class="form-control" name="post_status">
    </div> 
    <div class="form-group">

       <img width="100" src="../images/<?php echo $post_image; ?>" alt="">
       <input  type="file" name="post_image">
      </div>
    <div class="form-group">
        <label for="title">Post Tags</label>
        <input value="<?php echo $post_tags?>" type="text" class="form-control" name="post_tags">
    </div>
    <div class="form-group">
        <label for="title">Post Content</label>
        <textarea  type="text" class="form-control" name="post_content" id="" cols="30" rows="10">
        "<?php echo $post_content?>"
        </textarea>
    </div>
    <div class="form-group">
        <label for="title">Camp Cost</label>
        <input value="<?php echo $cost?>" type="text" class="form-control" name="camp_cost">
    </div>
    <div class="form-group">
        <label for="title">Camp Place</label>
        <input value="<?php echo $camp_place?>" type="text" class="form-control" name="camp_place">
    </div>
    <div class="form-group">
        <label for="title">Camp Time</label>
        <input value="<?php echo $camp_time?>" type="text" class="form-control" name="camp_time">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_post" value="Update">
    </div>

</form>