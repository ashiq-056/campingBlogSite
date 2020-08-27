

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>

	<div class="container">
		<form name="reg" method="post" action="regform.php">

        <div class="form-group">
		    <label for="usname">Username</label>
		    <input type="text" class="form-control" id="usname" name="usname">
		</div>
		  <div class="form-group">
		    <label for="fname">First Name</label>
		    <input type="text" class="form-control" id="fname" name="fname">
		</div>
		  <div class="form-group">
		    <label for="lname">Last Name</label>
		    <input type="text" class="form-control" id="lname" name="lname">
		  </div>
		<div class="form-group">
			<label for="eml">E-Mail</label>
			<input type="email" class="form-control" id="eml" name="eml">
		</div>
		 <div class="form-group">
		    <label for="pass">Password</label>
		    <input type="password" class="form-control" id="pass" name="pass" size="12">
		  </div>
		  <!-- <div class="form-group">
		    <label for="image">Image</label>
		    <input type="file" class="form-control" id="image" name="image">
		</div> -->
		  
		  <button type="submit" class="btn btn-primary" name="register">Submit</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php
    include 'server.php';
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {   if(isset($_POST['register'])) {  
		 $sql;
            $usname=$_POST['usname'];
            $pass=$_POST['pass'];
            $eml=$_POST['eml'];
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            // $img = $_FILES['image']['name'];
            // $image_temp = $_FILES['image']['tmp_name'];

            // move_uploaded_file($image_temp , "images/$img");
            if(strlen($pass)<7 )
            {
                echo "<script>window.alert('password is too short')</script>";
                
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
            
    }
?>