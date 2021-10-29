<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>QUIZ</title>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="css/form.css">
		<style>
            body {
                background-image: url('image/bg1.jpg');
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
	</head>

	<body>
		<section class="login first">
			<div class="container-fluid">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
						<center> <h5 style="font-family: Noto Sans;"><b>Login to </h5><h4 style="font-family: Noto Sans;">Our Quiz Portal</h4></center><br>
							<form method="post" action="login.php" enctype="multipart/form-data">
								<div class="form-group">
									<label>Enter Your Username:</label>
									<input type="email" name="email" class="form-control">
								</div>
								<div class="form-group">
									<label class="fw">Enter Your Email ID:
									</label>
									<input type="email" name="email" class="form-control">
                                </div> 
                                <div class="form-group">
									<label>Enter Your Collage Name:</label>
									<input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
									<label>Enter Your Collage Name:</label>
									<input type="email" name="email" class="form-control">
                                </div>
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Reset</button>
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