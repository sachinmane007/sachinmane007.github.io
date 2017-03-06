<?php
error_reporting(0);
include('config.php');
session_start();


if(isset($_POST['submit']))

{
$Username=$_post[Username];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobileno=$_POST['mobileno'];
$username=$_POST['username'];
$password=$_POST['password'];
$Confirmpass=$_post['password'];
$location=$_POST['location'];


$getdata=mysql_query("insert into user set `fname`='$fname',`lname`='$lname',`email`='$email',`mobileno`='$mobileno',`username`='$username',`password`='$password',`location`='$location'");


}

?>
<!DOCTYPE HTML>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<title>Registrations Form</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

</head>
<body>
 
<div class="contact">
<div class="container">
<div class="contact-top">
<h2 align="Center">Registration Form</h2>
</div>
<div class="contact-bottom">
<div class="contact-text">
<div class="col-md-3 contact-right">

<div class="clearfix"></div>
</div>
<div class ="container" align="center">
<form action="register.php" method="post">
UserName :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="" name="username" Placeholder="Username" required=""><br><br>
PassWord :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" value="" name="password" Placeholder="Password" required="" align="left"><br><br>
Confirm Password :&nbsp;&nbsp;<input type="password" value="" name="password" Placeholder="Confirm Password" required=""><br><br>
First Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="" name="fname" Placeholder="First-Name" required="">
<br><br>
last Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="" name="lname" Placeholder="last-Name" required="" style="">
<br><br>
Email_Id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" value="" name="email" Placeholder="email_id" maxlength="10" required="">	
<br><br>
Mobile-Number:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="" name="mobile" Placeholder="Phone" maxlength="10" required="">	
<br><br>
Location:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="" name="location" Placeholder="Type Your City Name" required="">
<br><br>
<div class="submit-btn">
<div class="clear-btn">							
<input type="submit" name="save" value="save">
<input type="Reset" value="Reset">
<br> <br>



/*
<table class="table" style="border:1px">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
		  <th>Email </th>
          <th>Mobile NO</th>
          <
		  <th>Location</th>
		  <th>Action</th>
        </tr>
      </thead>
      <tbody>
	  
	  <?php

$getdata=mysql_query("select * from user");

	while($row=mysql_fetch_array($getdata))
	{

	$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];		
	$mobileno=$row['mobileno'];
	$location=$row['locatioin'];
	

?>
        <tr class="active">
        
<td><?php echo $userid;?></td>
          
	<td><?php echo $fname; ?></td>
	
	      <td><?php echo $lname;?></td>
		  	      <td><?php echo $email;?></td>

          <td><?php echo $email;?></td>
		  
		  <td>
		  <a href="register.php?userid=<?php echo $userid;?>">
		  
			<input type="Edit" value="Edit" ></a>
			<a href="register.php?deleteuserid=<?php echo $userid;?>">
		    <input type="Delete" value="Delete"></a>
			
		 </td>
        </tr>
		<?php 
	}
	?>
      </tbody>
   </table>



</div></div>							
</form>
</div>						
<div class="clearfix"></div>
</div>


</div>
</div>
</div>	 
</body>
</html>