
<html>
<head>
<link rel="stylesheet" media="all" type="text/css" href="text.css">
<title>Payment4</title>

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
<br />
<div id="fade">
<h1 id="out">Payment Details: </h1>
<p line-height="130%"><br>
<?php
$college=$_POST['college'];
$category=$_POST['category'];
$feetype=$_POST['feetype'];
$name=$_POST['user'];
$feeamount=$_POST['feeamount'];
$payby=$_POST['payby'];
$bank=$_POST['bank'];


echo 'Roll No:  ';
echo $name;
echo '<br>';
echo 'Category:  ';
echo $category;
echo '<br>';
echo 'Fee Type:  ';
echo $feetype;
echo '<br>';
echo 'Fee Amount:  ';
echo $feeamount;
echo '<br>';
echo 'Pay By:  ';
echo $payby;
echo '<br>';
echo 'Bank:  ';
echo $bank;

if(isset($_POST['back'])){
	header("Location:payment.php");}






?>
<form id="form" name="rollno" action="payer.php" method="post">

<input type="hidden" name="user" value="<?php 
echo $name; ?>">
<input type="hidden" name="college" value="<?php 
echo $college; ?>">
<input type="hidden" name="category" value="<?php 
echo $category; ?>">
<input type="hidden" name="feetype" value="<?php 
echo $feetype; ?>">
<input type="hidden" name="feeamount" value="<?php 
echo $feeamount; ?>">
<input type="hidden" name="payby" value="<?php 
echo $payby; ?>">
<input type="hidden" name="bank" value="<?php 
echo $bank; ?>">

<input type="submit" id="sub" onmouseover="this.style.backgroundColor='#483D8B'" onmouseout="this.style.backgroundColor='#00008B';return true"  name="submit" value="Continue"> <br><br>
<input type="submit" id="sub" onmouseover="this.style.backgroundColor='#483D8B'" onmouseout="this.style.backgroundColor='#00008B';return true" name="back" value="Back">
   </form>

 </p>
 </div>
 <div id="type">
 <p>
 <br>
 INFORMATION::
 <br><br>
 NAME : C.LALNUNCHAMA <br>
 Roll No : 116CS0197 <br>
 Section : S1 <br>
 Subject : Database Management System Project<br>
 Contact : +917978205707 <br>
 Email : clalnunchama@gmail.com<br>
 <br>
 
 </div>
 <hr />
</body>
<html>