<!DOCTYPE html>
<?php
    session_start();
    if(isset($_COOKIE['cookie_name']))
	{
	  header('Location: Blog.php');
	}
   if (isset($_POST['loggedin'])) {
			include 'server.php';
      $eml=$_POST['eml'];
			$password=$_POST['pass'];
			$sql= "SELECT * FROM register WHERE (email='$eml' AND pass='$password')";
			$result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0)
      {
         if(!empty($_POST["remember"]))
        {
           $cookie_name = $_POST["eml"];
            $cookie_value = $_POST["pass"];
            echo $cookie_name.$cookie_value;
            setcookie('cookie_name', $cookie_name, time() + (86400 * 30)); // 86400 = 1 day
        } 
		$row = mysqli_fetch_assoc($result);

		
		$_SESSION['user_id'] = $row['Id'];
		$_SESSION['user_fname'] = $row['firstname'];
		$_SESSION['user_lname'] = $row['lastname'];
		$_SESSION['user_email'] = $row['email'];
		$_SESSION['user_name'] = $row['username'];
		$_SESSION['user_role'] = $row['role'];
		$_SESSION['user_image'] = $row['images'];

        header('Location: Blog.php');  
			}
    }  
?>
<html>
<head>
		<title>Login Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style type="text/css">
		
		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background: url(https://www.rei.com/content/dam/images/Expert%20Advice/2019/04/Wells_030819_3602_camping_with_kids.jpg) no-repeat ;
			background-size: cover;
		}
		.login-box{
			width: 280px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50% , -50%);
			color: white;
		}
		.login-box h1{
			font-size: 40px;
			border-bottom: 6px solid #4caf50;
			margin-bottom: 50px;
			padding: 13px 0;
		}
		.textbox{
			width: 100%;
			overflow: hidden;
			font-size: 20px;
			padding: 8px 0;
			margin: 8px 0;
			border-bottom: 1px solid #4caf50;
		}
		.textbox input{
			border: none;
			outline: none;
			background: none;
			color: white;
			font-size: 18px;
			width: 80%;
			float: left;
			margin: 0 10px;
		}
		.btn{
			width: 100%;
			background: none;
			border: 2px solid #4caf50;
			color: white;
			padding: 5px;
			font-size: 18px;
			cursor: pointer;
			margin: 12px 0;
		}
	</style>
</head>
<body>
	<!-- <div class="container"> -->
		<!-- <form method="post" action="login.php">
		  <div class="form-group">
		    <label for="eml">Email</label>
		    <input type="email" class="form-control" id="eml" name="eml">
		  </div>
		  <div class="form-group">
		    <label for="pass">Password</label>
		    <input type="password" class="form-control" id="pass" name="pass">
		  </div>
		  <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="Check1" checked="checked" name="remember">
		    <label class="form-check-label" for="Check1">Remember Me</label>
		  </div>
		  <button type="submit" class="btn btn-primary" name="loggedin">Submit</button>
		</form>
    <p>New User?</p>
	<p><a href="regform.php">Click here to register</a></p> -->
		<div class="login-box">
			<form method="POST" action="login.php">
			<h1>Login</h1>
			<div class="textbox">
			    <input type="email" placeholder="Enter Your Email"  class="form-control" id="eml" name="eml">
			</div>
			<div class="textbox">
			    <input type="password" placeholder="Enter Your Password"  class="form-control" id="pass" name="pass">
			</div>
			<div class="text-box form-check">
				<input type="checkbox" class="form-check-input" id="Check1" checked="checked" name="remember">
				<label class="form-check-label" for="Check1">Remember Me</label>
		  </div>
		  <button type="submit" class="btn btn-primary" name="loggedin">Submit</button>
			</form>
			<p>New User?</p>
	<p><a class="text-info" href="regform.php">Click here to register</a></p>
	<!-- </div> -->
</body>
</html>