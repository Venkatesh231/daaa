<?php
session_start();
include_once '../dbconnect.php';
include_once 'dbconfig.php';
?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Catonate Network</title>
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
 <br>
<!--nav-->
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Catonate</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="../index.php">Home</a></li>
      <li class="active"><a href="staffs.php">Staffs</a></li>
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
				<li><a href="../logout.php">Log Out</a></li>
				<?php } else { ?>
				 <li><a href="../register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<?php } ?>      
    </ul>
  </div>
</nav>
<!--end of nav-->
    <table class="table">
    <tr>
   
    </tr>
    <th>Name</th>
    <th>Location</th>
    <th>Position</th>
    <th>Email</th>
    </tr>
    <?php
	$sql_query="SELECT * FROM users";
	$result_set=mysql_query($sql_query);
	if(mysql_num_rows($result_set)>0)
	{
        while($row=mysql_fetch_row($result_set))
		{
		?>
            <tr>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
            
            </tr>
        <?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="5">No Data Found !</td>
        </tr>
        <?php
	}
	?>
    </table>
	<br><br><br><br><br><br>
    
		  <!--footer-->
 <br><br><footer>
 <div class="footer">
 <center>Copyrights Reserved &copy; Catonate Network | Designed by Hariharan.</center>
 </div>
<!--end of footer-->
	</div>
</div>

 
 

<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>

</center>
</body>
</html>