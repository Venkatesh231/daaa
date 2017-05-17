 <?php
session_start();
include_once 'dbconnect.php';
?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Catonate Network</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

</head>
<body>

<div id="main">
<div class="container">
 <br>
 <div id="ad"><a href="admin">Admin Login</a></div>
<!--nav-->
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Catonate</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="admin/staffs.php">Staffs</a></li>
      <li><a href="#">Activity</a></li>
    </ul>
	 <form class="navbar-form navbar-left">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
    <ul class="nav navbar-nav navbar-right">
     				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><a>Signed in as <?php echo $_SESSION['usr_name']; ?></a></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				 <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<?php } ?>      
    </ul>
  </div>
</nav>
<!--end of nav-->



<!--content-->
      <center><img src="img/s1.png" /></center>
	  <br>
	  <center><h1>Welcome to Catonate Network</h1><br>
	 
	
<hr size="4">

	 <p>This is a new community. Find friends in this community. Connecting people is our main aim. Always participate in our forums and other sections.
	  The website is in building beta stage. It will constructed soon. Make sure you register today. Many new features coming soon. The app will be built for this community.
	  Always be connected. Sign Up Today.</p><br>
	  
	  <a href="register.php" class="btn btn-success" role="button" style="padding-right: 30px;padding-left: 30px;">Sign Up</a></center>
	  <br><br>
	  
	  
	  <center><h3>For Further Details:</h3><center>
	  <div class="row" >
      <div class="col-md-6 col-md-offset-3 ">
        <div class="well well-sm" >
          <form class="form-horizontal" action="mail.php" method="post">
          <fieldset>
            <legend class="text-center">Contact us</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-success btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
	 
	  

	  
	  


<!--end of content-->

	  <!--footer-->
 <br><br><footer>
 <div class="footer">
 <center>Copyrights Reserved &copy; Catonate Network | Designed by Hariharan.</center>
 </div>
<!--end of footer-->
 
 
</div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>