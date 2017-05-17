<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	// variables for input data
	$name = $_POST['name'];
	$location = $_POST['location'];
	$position = $_POST['position'];
	$email = $_POST['email'];
	// variables for input data
	
	// sql query for inserting data into database
	$sql_query = "INSERT INTO users(name,location,position, email) VALUES('$name','$location','$position','$email')";
	// sql query for inserting data into database
	
	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Inserted Successfully ');
		window.location.href='staff_edit.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while inserting your data');
		</script>
		<?php
	}
	// sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Staff</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>ADD A NEW STAFF:</a></label>
    </div>
</div>
<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="staff_edit.php"> ←Back</a></td>
    </tr>
    <tr>
    <td><input type="text" name="name" placeholder="Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="location" placeholder="Location" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="position" placeholder="Position" required /></td>
    </tr>
	 <tr>
    <td><input type="text" name="email" placeholder="Email" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>