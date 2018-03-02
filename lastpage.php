
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
<h1 id="out">Payment Details: </h1>
<p line-height="130%"><br>
<?php


if(isset($_POST['submit'])){
	
	$college=$_POST['college'];
$category=$_POST['category'];
$feetype=$_POST['feetype'];
$name=$_POST['user'];
$feeamount=$_POST['feeamount'];
$payby=$_POST['payby'];
$bank=$_POST['bank'];
$date = date('Y-m-d H:i:s');


echo 'Roll No:  ';
echo $name;
echo '<br>';
echo 'Category:  ';
echo $category;
echo '<br>';
echo 'Fee Type:  ';
echo $feetype;
echo '<br>';
echo 'College:  ';
echo $college;
echo '<br>';
echo 'Fee Amount:  ';
echo $feeamount;
echo '<br>';
echo 'Pay By:  ';
echo $payby;
echo '<br>';
echo 'Bank:  ';
echo $bank;

	$country=$_POST['country'];
$card=$_POST['credit'];
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$address=$_POST['address'];
$zip=$_POST['code'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$db=mysqli_connect('localhost','root','','manuna');
	if(empty($card)||empty($firstname)||empty($lastname)||empty($address)||empty($zip)||empty($phone)||empty($email)){
	echo "<br><br>Note:<block id='result' size='60' > Please fill all the form </block>";}
/*		echo "<form action='lastpage.php' method='post'><input type='submit' id='sub' onmouseover='this.style.backgroundColor='#483D8B'' onmouseout='this.style.backgroundColor='#00008B';return true' name='backk' value='Back to Home!!'>
   </form>";
	} */
else{$check="SELECT COUNT(*) FROM student WHERE roll = '$name' and type='$feetype'";
	$rs = mysqli_query($db,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] >= 1)
{
    echo "<br><br>Note: <block id='result' size='60' >
	Not Successful...You have already paid for the same fee. Please choose different Fee Type</block>";
}
else{
$sql= "INSERT INTO student(roll,type,category,college) values ('$name','$feetype','$category','$college') ";

if(mysqli_query($db,$sql)){
	
	$sql2= "INSERT INTO payment(type,roll,payer,fee) values ('$feetype','$name','$payby','$feeamount')";
    $sql3= "INSERT INTO bank(bname,date,time,cardno) values('$bank','$date','$date','$card' )";
	$sql4= "INSERT INTO info(roll,type,firstname,lastname,payer,country,address,phone,email) values('$name','$feetype','$firstname','$lastname','$payby','$country','$address','$phone','$email' )";
	$insert_id=mysqli_insert_id($db);
	$insert=mysqli_query($db,$sql2);
	$insert=mysqli_query($db,$sql3);
	$insert=mysqli_query($db,$sql4);
	echo "<br><br>Note:<block id='result' size='60' > Fee Paid Successfully</block>";
}}}
}


if(isset($_POST['back'])){
	header("Location:index.php");}
	
	if(isset($_POST['backk'])){
	header("Location:payer.php");}
?>
 <br />
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