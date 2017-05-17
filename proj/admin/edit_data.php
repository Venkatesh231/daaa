<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
	$name = $_POST['name'];
	$location = $_POST['location'];
	$position = $_POST['position'];
	$email = $_POST['email'];
	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE users SET name='$name',location='$location',position='$position',email='$email' WHERE user_id=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='staff_edit.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while updating data');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: staff_edit.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Staff</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>EDIT STAFF INFORMATION:</label>
    </div>
</div>

<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="name" placeholder="Name" value="<?php echo $fetched_row['name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="location" placeholder="Location" value="<?php echo $fetched_row['location']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="position" placeholder="Position" value="<?php echo $fetched_row['position']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>Update<strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>