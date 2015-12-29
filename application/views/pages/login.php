<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<title>Login</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>


<body>
<div class="container">
	<div class="inner-page">
		<div class="logo text-center">
			<h2>Intranet-based Electronic Project Procurement Management Plan</h2>
		</div>
		
	<div class="formlogin">		
		<div class="row container">
			<div class="col-sm-6 col-md-offset-3">
				<form class="form-horizontal" method ="POST" action="<?php echo base_url('login.php')?>">
					
					<div class="form-group">
						<div class="col-sm-12">
						<label for="username" class="col-sm-2 control-label">Username
						</label>
							<div class="input-group">
								<input type="text" placeholder="username" id="username" class="form-control">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
						<label for="password" class="col-sm-2  control-label">Password
						</label>
							<div class="input-group">
								<input type="password" placeholder="password" id="password" class="form-control">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							</div>
						</div>
					</div>
					
					<div class="col-md-offset-2">	
						<label class="fancy-checkbox">
							<input type="checkbox">
							<span>Remember me next time</span>
						</label>
					</div>	

					<div class="form-group">
						<div class="col-md-4 col-md-offset-8">
							<button class="btn btn-custom-primary btn-block">
							<i class="fa fa-arrow-circle-o-right"></i>  Login</button>
						</div>	
					</div>	
				</form>
				
				<div class="container">
				<br/>
					<p>Forgot Username or Password?</p>
					<p>Kindly contact the admin office to retrieve your account.</p>
				</div>
			</div>
		</div>
	</div>		
	</div>

	<!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>