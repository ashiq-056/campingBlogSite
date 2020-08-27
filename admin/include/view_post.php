<div class="d-sm-flex justify-content-center justify-content-sm-between">
    <table class="table table-bordered table-dark table-hover">
        <thead >
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Title</th>
                <th>Status</th>
                <th>Image</th>
                <th>Tags</th>
                <!-- <th>Comments</th> -->
                <th>Date</th>
                <th>Cost</th>
                <th>Place</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            

            <?php

                if($_SESSION['user_role']=="admin"){

                $query = "SELECT *FROM post";

                }

                else{

                $query = "SELECT * FROM post where user_id = {$_SESSION['user_id']}";
            
                }

                $select_post = mysqli_query($connection , $query);

                while($row = mysqli_fetch_assoc($select_post)){
                    
                    
                    $post_id = $row['post_id'];
                    $post_author = $row['post_author'];
                    $post_title = $row['post_title'];
                    $post_status = $row['post_status'];
                    $post_image = $row['post_image'];
                    $post_tags = $row['post_tags'];
                    // $post_comment_count = $row['post_comment_count'];
                    $post_date = $row['post_date'];
                    $cost = $row['cost'];
                    $camp_place = $row['camp_place'];
                    $camp_time = $row['camp_time'];
                    
                    echo "<tr>";
                    echo "<td>$post_id </td>";
                    echo "<td>$post_author </td>";
                    echo "<td>$post_title </td>";
                    echo "<td>$post_status </td>";
                    echo "<td><img src='../images/$post_image'> </td>";
                    echo "<td>$post_tags </td>";
                    // echo "<td>$post_comment_count </td>";
                    echo "<td>$post_date </td>";
                    echo "<td>$cost </td>";
                    echo "<td>$camp_place </td>";
                    echo "<td>$camp_time </td>";
                    echo "<td><a href='post.php?source=edit_post&p_id={$post_id}'>Edit </a></td>";
                    echo "<td><a href='post.php?delete={$post_id}'>Delete </a></td>";
                    echo "</tr>";
                }

            ?>

                
        </tbody>
    </table>
    
    <?php

        if(isset($_GET['delete'])){

            $postId = $_GET['delete'];
        $query = "DELETE FROM post WHERE post_id = {$postId}";
        $delete_query = mysqli_query($connection, $query);
            
        } 
    
    ?>

</div>