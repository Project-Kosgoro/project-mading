<?php
session_start();
include ('koneksi.php');
?>
<html>
	<head>
		<script type="text/javascript" src="assets/js/css-pop.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/style_header.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
		<style type="text/css">
		.kotak{	
			margin-top: 150px;
		}

		.kotak .input-group{
			margin-bottom: 20px;
		}
		</style>
		<title>Login</title>
	</head>
	<body>
		<div class="panel panel-default" style="margin-top:50px;">
			<form action="cek_login.php" method="post">
				<div class="col-md-4 col-md-offset-4 kotak">
					<div class="modal-content">
						<h3 style="margin-left:20px;">Silahkan Login ..</h3>
						<div class="input-group" style="width:380px; margin-left:20px;">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" class="form-control" placeholder="Username" name="username">
						</div>
						<div class="input-group" style="width:380px; margin-left:20px;">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="password" class="form-control" placeholder="Password" name="password">
						</div>
						<div class="input-group" style="margin-left:330px;">			
							<input type="submit" class="btn btn-primary" value="LOGIN">
						</div>			
							
					</div>
				</div>
			</form>
		</div>	
	</body>
</html>
