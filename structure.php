<!DOCTYPE HTML>
<html>
<head>
<title>Fee Structure</title>
<link rel="stylesheet" media="all" type="text/css" href="text.css">

</head>
<body>
<img src="adufi.jpg" width="100%" height="150"/>
<hr />
<table width="100%" id="tab" height="50" cellspadding="3">
<tr>
	<th><a href="index.php">Home</a></th>
	<th><a href="second.php">Payment</a></th>
	<th><a href="http://facebook.com">About</a></th>
	<th><a href="http://youtube.com">Learn More</a></th>
	
</tr>
</table>
 <?php 
 $name=$_POST['user'];
 if(isset($_POST['back'])){
	header("Location:payment.php");} ?>
<br />
<br />
<h1 id="out">Fee Structure</h1>
<table id="feetable" width="90%" style="margin-left: 5%" height="80" cellspadding="4" border="1">
<tr id="th2">
			
			<td>Serial No.</td>
			<td>CATEGORY</td>
			<td>Semester Registration</td>
			<td>Summer Registration</td>
			<td>Miscellaneous Fee</td>
			<td>Library Fine</td>
			<td>Donation </td>
	
	</tr>
	<tr>
			
			<td>1.</td>
			<td>GENERAL</td>
			<td>Rs.67,500</td>
			<td>Rs.30,000</td>
			<td>Rs.5,000</td>
			<td>Rs.100</td>
			<td>Rs.5,000</td>
	
	</tr>
		<tr >
			
			<td>2.</td>
			<td>OBC</td>
			<td>Rs.50,000</td>
			<td>Rs.30,000</td>
			<td>Rs.5,000</td>
			<td>Rs.100</td>
			<td>Rs.5,000</td>
	
	</tr>
		<tr>
			
			<td>3.</td>
			<td>SC</td>
			<td>Rs.35,000</td>
			<td>Rs.30,000</td>
			<td>Rs.5,000</td>
			<td>Rs.100</td>
			<td>Rs.5,000</td>
	
	</tr>
		<tr >
			
			<td>4.</td>
			<td>ST</td>
			<td>Rs.30,000</td>
			<td>Rs.30,000</td>
			<td>Rs.5,000</td>
			<td>Rs.100</td>
			<td>Rs.5,000</td>
	
	</tr>
		<tr>
			
			<td>5.</td>
			<td>DASA</td>
			<td>Rs.1,25,000</td>
			<td>Rs.30,000</td>
			<td>Rs.5,000</td>
			<td>Rs.100</td>
			<td>Rs.5,000</td>
	
	</tr>
<table>
<br>
<br><br>
 <form action="payment.php" method="post" name="rollno">
 <input type="hidden" name="user" value="<?php 
echo $name; ?>">
 <input type="submit"  id="sub2" name="back" onmouseover="this.style.backgroundColor='#483D8B'" onmouseout="this.style.backgroundColor='#00008B';return true" style="margin-left:35%"  onclick="Back" value="Back to Payment Page!!">
 </form><br><br>
 <br />

 <hr />
</body>
</html>