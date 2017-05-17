<?php session_start(); 
		
	if(isset($_POST['Submit'])){

		$logins = array('hari' => '123','username1' => 'password1','username2' => 'password2');
		
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
			
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:admin.php");
			exit;
		} else {
			echo "<center> Invalid Username or Password<center>";
		}
	}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />

</head>
<body>
<div id="main">
<div class="container">
<br><br><center><h2>Admin Control Panel Login</h3><br><br><br>

	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Admin Login</legend>
					
					<div class="form-group">
						<label for="name">Username</label>
						<input type="text" name="Username" placeholder="Username" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="Password" placeholder="Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="Submit" value="Login" class="btn btn-success" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div></center>
<a class="btn btn-success" href="../index.php">←Back Home</a>
<br><br><br><br><br><br><br><br><br><br>
</div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>