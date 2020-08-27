<?php
    include 'server.php';
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {       $sql;
            $usname=$_POST['usname'];
            $pass=$_POST['pass'];
            $eml=$_POST['eml'];
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            // $img = $_FILES['image']['name'];
            // $image_temp = $_FILES['image']['tmp_name'];

            // move_uploaded_file($image_temp , "images/$img");
            if(strlen($pass)<7)
            {
                echo "<script>window.alert('please enter more than or equal 7 digits')</script>";
            }
            else{
                $sql = "INSERT INTO register (username , pass , email , firstname , lastname ) VALUES ('$usname','$pass','$eml', '$fname','$lname')";
                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                } 
            }
           
            
    }
?>