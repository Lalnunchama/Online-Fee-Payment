<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" media="all" type="text/css" href="text.css">
<title>Manuna page</title>

</head>
<body>

<img src="adufi.jpg" width="100%" height="150"/>
<hr />
<table width="100%" id="tab" height="50" cellspadding="3">
<tr>
	<th><a href="index.php">Home</a></th>
	<th><a href="http://facebook.com">About</a></th>
	<th><a href="http://youtube.com">Learn More</a></th>
</tr>
</table>
<br />
<br />




<div id="fade">
<h1 id="out">Payment Page</h1>
<p line-height="130%">
Please Enter your Information</p><br>

<?php
$name=$_POST['user'];

$db=mysqli_connect('localhost','root','','manuna');

$sql="select name from record where name='$name'";
$result=$db->query($sql);if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		header("Location:payment.php");
	}
}

else{
	echo "Sorry, Your Roll Number could not be found in our database";
}

?>

<form name="rollno" id="form">
Enter Your Roll no: <input type="text" name="user" ><br><br>
 <br><br>
  <input type="submit" id="sub" class="btn" value="Start Payment"/>
   <br>
   </form>
 <br /></div>
 
 
 
 
 <div id="type">
 <p>
 <br>
 INFORMATION::
 <br><br>
 NAME : C.LALNUNCHAMA <br>
 Roll No : 116CS0197 <br>
 Section : S1 <br>
 Subject : Database Management <br>System Project<br>
 Contact : +917978205707 <br>
 Email : clalnunchama@gmail.com<br>
 <br>
 
 </div>
 <hr />
 <div
</body>
<html>