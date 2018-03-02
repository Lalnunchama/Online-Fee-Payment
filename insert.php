
<html>
<head>
<link rel="stylesheet" media="all" type="text/css" href="text.css">
<title>Payment3</title>

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
<h1 id="out">Payment Details :</h1>
<p line-height="130%">
<?php

$college=$_POST['college'];
$category=$_POST['category'];
$feetype=$_POST['feetype'];
$name=$_POST['user'];
$fee1;

if(empty($college) || empty($category) || empty($feetype))
{
   header("Location:payment.html");
}

if($category=="General"&& $feetype=="Sem"){
	$fee1 = 67500;
}else if($category=="OBC"&& $feetype=="Sem"){
	$fee1 = 50000;
}else if($category=="SC"&& $feetype=="Sem"){
	$fee1 = 35000;
}else if($category=="ST"&& $feetype=="Sem"){
	$fee1 = 30000;
}else if($category=="DASA"&& $feetype=="Sem"){
	$fee1 = 125000;
}else if($feetype=="Library"){
	$fee1 = 100;
}else if($feetype=="Misc"){
	$fee1 = 5000;
}else if($feetype=="Summer"){
	$fee1 = 30000;
}else if($feetype=="Donation"){
	$fee1 = 5000;
}
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
echo $fee1;
?>


<form name="rollno" id="form" action="info.php" method="post">

<input type="hidden" name="user" value="<?php 
echo $name; ?>">
<input type="hidden" name="college" value="<?php 
echo $college; ?>">
<input type="hidden" name="category" value="<?php 
echo $category; ?>">
<input type="hidden" name="feetype" value="<?php 
echo $feetype; ?>">
<input type="hidden" name="feeamount" value="<?php 
echo $fee1; ?>">


Pay By : <select id="now" name="payby">
<option value="self">Self</option>
<option value="father">Father</option>
   <option value="mother">Mother</option>
   <option value="relative">Relatives</option>
   <option value="other">Other</option>
   </select><br><br>
  
  Select Bank : <select id="now" name="bank">
<option value="SBI">State Bank of India</option>
<option value="CB">Canara Bank</option>
<option value="ICICI">ICICI Bank</option>
   <option value="AB">Axis Bank</option>
   <option value="BOI">Bank of India</option>
   </select>
   
   
 <br><br>
  <input type="submit" id="sub" name="submit" onmouseover="this.style.backgroundColor='#483D8B'" onmouseout="this.style.backgroundColor='#00008B';return true" value="Continue"> <br><br>
<input type="submit" id="sub" name="back" onmouseover="this.style.backgroundColor='#483D8B'" onmouseout="this.style.backgroundColor='#00008B';return true" value="Back to Home!!">
  
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

