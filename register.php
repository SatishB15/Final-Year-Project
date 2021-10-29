<?php
	include("database.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	
		$name = $_POST['name'];
		$name = stripslashes($name);
		$name = addslashes($name);

		$email = $_POST['email'];
		$email = stripslashes($email);
		$email = addslashes($email);

		$password = $_POST['password'];
		$password = stripslashes($password);
		$password = addslashes($password);

		$college = $_POST['college'];
		$college = stripslashes($college);
		$college = addslashes($college);

		$gender=$_POST['gender'];
		$date=$_POST['bdate'];
		$newdate=date("Y-m-d",strtotime($date));
		$phone=$_POST['phone'];
		$str="SELECT email from user WHERE email='$email'";
		$result=mysqli_query($con,$str);
		
		if((mysqli_num_rows($result))>0)	
		{
			echo '<script>
			alert("Sorry.. This email is already registered !!")</script>';
            header("refresh:0;url=login.php");
        }
		else
		{
            $str="insert into user values('$name','$college','$email',$password,'$gender',$newdate,'$phone')";
			if((mysqli_query($con,$str)))	
			echo '<script>alert("Congrats.. You have successfully registered !!")</script>';
			header('location: welcome.php?q=1');
		}
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Register | Quiz Portal</title>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="css/form.css">
		<style type="text/css">
            body{
	background-image: url("image/bg1.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
                }
          </style>
	</head>

	<body>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
							<center> <h4 style="font-family: Noto Sans;">Register to </h4><h2 style="font-family: Noto Sans;">Our Quiz Portal</h2></center><br>
							<form method="post" action="register.php" enctype="multipart/form-data">
                                <div class="form-group">
									<label class="nlabel">Enter Your Full Name:</label>
									<input type="text" name="name" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Email Id:</label>
									<input type="email" name="email" class="form-control" required />
								</div>
								<div class="col-md-12 form-group">
									<div class="col-md-6 form-group">
									<label>Select Gender:</label><br>
									<select name="gender" class="form-control">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Other">Other...</option>
									</select>
									</div>
									<div class="col-md-6">
									<label>Select BirthDate:</label>
									<input type="date" name="bdate" class="form-control" required />
									</div>
								</div>
								<div class="form-group">
									<label>Enter Your Phone No:</label>
									<input type="tel" name="phone" class="form-control" required />
                                </div>
								<div class="form-group">
									<label>Enter Your Password:</label>
									<input type="password" name="password" class="form-control" required />
								</div>
								
								<div class="form-group">
									<label>Enter Your College Name:</label>
									<input type="text" name="college" class="form-control" required />
								</div>
                                
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Register</button>
								</div>
								<div class="form-group text-center">
									<b><span class="text-muted">Already have an account! </span> </b><a href="login.php">Login </a> Here....!
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
	</body>
</html>