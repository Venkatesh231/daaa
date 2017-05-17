<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	$to='hariharan0044@gmail.com';	// Change Receive Mail Id
	$message ="<html>
<head>

</head>
<body>
<center>
<h2>New Message:</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
	
  </tr>
  <tr>
    <td>$name</td>
    <td>$email</td>
	<td>$message</td>
</tr>
</table></center>
</div>

</body>
</html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	$headers .= "From: Hariharan<mywebsite.com>" . "\r\n"; //Change company name
	mail($to, $name, $email, $message, $headers);
	header('location:index.php');
?>