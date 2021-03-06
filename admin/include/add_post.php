<?php

if(isset($_POST['create_post'])){

    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_status = $_POST['post_status'];
    $post_image = $_FILES['post_image']['name'];
    $post_image_temp = $_FILES['post_image']['tmp_name'];
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
    $post_comment_count = 2;
    $camp_cost = $_POST['camp_cost'];
    $camp_place = $_POST['camp_place'];
    $camp_time = $_POST['camp_time'];

    move_uploaded_file($post_image_temp , "../images/$post_image");

    $query = "INSERT INTO post (post_title, post_author, post_date, post_image, cost, post_content, post_tags, post_status, camp_place, camp_time)";
    $query .= "VALUES('{$post_title}', '{$post_author}', now(), '{$post_image}', '{$camp_cost}', '{$post_content}', '{$post_tags}'  , '{$post_status}', '{$camp_place}', '{$camp_time}')";

    $create_post_query = mysqli_query($connection, $query);

    confirm($create_post_query);

}

?>




<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="post_title">
    </div>
    <div class="form-group">
        <label for="title">Post Author</label>
        <input type="text" class="form-control" name="post_author">
    </div>
    <div class="form-group">
        <label for="title">Post Status</label>
        <input type="text" class="form-control" name="post_status">
    </div> 
    <div class="form-group">
        <label for="title">Post Image</label>
        <input type="file" class="form-control" name="post_image">
    </div>
    <div class="form-group">
        <label for="title">Post Tags</label>
        <input type="text" class="form-control" name="post_tags">
    </div>
    <div class="form-group">
        <label for="title">Post Content</label>
        <textarea type="text" class="form-control" name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
    <div class="form-group">
        <label for="title">Camp Cost</label>
        <input type="text" class="form-control" name="camp_cost">
    </div>
    <div class="form-group">
        <label for="title">Camp Place</label>
        <input type="text" class="form-control" name="camp_place">
    </div>
    <div class="form-group">
        <label for="title">Camp Time</label>
        <input type="text" class="form-control" name="camp_time">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_post" value="Add">
    </div>

</form>