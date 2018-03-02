
<html>
<head>
<link rel="stylesheet" media="all" type="text/css" href="text.css">
<title>Confirm</title>

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
<?php

	
$college=$_POST['college'];
$category=$_POST['category'];
$feetype=$_POST['feetype'];
$name=$_POST['user'];
$feeamount=$_POST['feeamount'];
$payby=$_POST['payby'];
$bank=$_POST['bank'];
$date = date('Y-m-d H:i:s');


$db=mysqli_connect('localhost','root','','manuna');
if(isset($_POST['submit'])){
	$check="SELECT COUNT(*) FROM student WHERE roll = '$name' and type='$feetype'";
	$rs = mysqli_query($db,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] >= 1)
{
    echo "<br><br>Note: <block id='result' size='60' >
	Not Successful...You have already paid for the same fee. Please choose different Fee Type</block>";
}
}


if(isset($_POST['back'])){
	header("Location:insert.php");}
?>
<h1 id="out">Payment Details: </h1>
<p line-height="130%"> Input your details:-<br></p><br>

 <form id="form"  name="payer" action="lastpage.php" method="post">
 
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


 Country:-
  <select id="now" name="country">
<option value="India">India</option>
<option value="China">China</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="China">China</option>
   <option value="Nepal">Nepal</option>
   <option value="Bhutan">Bhutan</option>
<option value="Afghanistan">Afghanistan</option>
   <option value="Korea">Korea</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Pakistan">Pakistan</option>
   </select><br><br>
   
   Credit Card Number: <input id="rollin" type="text" placeholder="eg.1234567891234" name="credit" ><br><br>
   Expiry Date: <input id="rollin" type="text" placeholder="eg.09/21" name="exp" > &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CVV: <input id="rollin" type="text" placeholder="eg.123" name="ccv" ><br><br>
   First Name: <input id="rollin" type="text" placeholder="eg.Malkhan" name="fname" ><br><br>
   Last Name: <input id="rollin" type="text" placeholder="eg.Singh" name="lname" ><br><br>
   Address : <input id="rollin" type="text" placeholder="eg.B-130, Salt Lake, Kolkata" name="address" ><br><br>
   Zip Code: <input id="rollin" type="text" placeholder="eg.769001" name="code" ><br><br>
   Phone: <input id="rollin" type="text" placeholder="eg.7978205707" name="phone" ><br><br>
   Email Address: <input id="rollin" type="text" placeholder="eg.malkhan@gmail.com" name="email" ><br><br>
   
   
<input type="submit" id="sub" onmouseover="this.style.backgroundColor='#483D8B'" onmouseout="this.style.backgroundColor='#00008B';return true"  name="submit" value="Pay Now!!"> <br><br>
<input type="submit" id="sub" onmouseover="this.style.backgroundColor='#483D8B'" onmouseout="this.style.backgroundColor='#00008B';return true" name="back" value="Back">
   
   </form>
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
</html>