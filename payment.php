
<html>
<head>
<link rel="stylesheet" media="all" type="text/css" href="text.css">
<title>Payment2</title>

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


<div id="fade">
<h1 id="out">Payment Page</h1>

<p line-height="130%">
Please Enter your Information<br>
<?php
$name=$_POST['user'];

$db=mysqli_connect('localhost','root','','manuna');

$sql="select name from record where name='$name'";
$result=$db->query($sql);if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo $name;
	}
}

else{
	header("Location:second.php");
}

?>
<div id="hiss">
	<form name="history" action="history.php" method="post">
		<input type="hidden" name="user" value="<?php 
		echo $name; ?>">
		<input type="submit" id="history" onmouseover="this.style.backgroundColor='white'" onmouseout="this.style.backgroundColor='#FFEFD5';return true" value="Payment History">
</form></div>
<div id="fee">
	<form name="history" action="structure.php" method="post">
	<input type="hidden" name="user" value="<?php 
		echo $name; ?>">
		<input type="submit" id="struct" onmouseover="this.style.backgroundColor='white'" onmouseout="this.style.backgroundColor='#FFEFD5';return true" value="Fee Structure">
</form></div>

<form id="form"  name="rollno" action="insert.php" method="post">
<input type="hidden" name="user" value="<?php 
echo $name; ?>">

College : <select id="now" name="college">
<option value="NITR">NIT Rourkela</option>
   </select><br><br>


Category: <select id="now"  name="category">
<option value="General">General</option>
<option value="OBC">OBC</option>
   <option value="SC">SC</option>
   <option value="ST">ST</option>
   <option value="DASA">DASA</option>
   </select><br><br>
  

  Fee Type: <select id="now" name="feetype">
<option value="Sem">Semester registration</option>
<option value="Library">Library Fine</option>
<option value="Misc">Miscellaneous Fee</option>
   <option value="Summer">Summer Registration</option>
   <option value="Donation">Donation for Rs.5000</option>
   </select>
   
   
 <br><br>
  <input type="submit" id="sub" onmouseover="this.style.backgroundColor='#483D8B'" onmouseout="this.style.backgroundColor='#00008B';return true" value="Continue"/>
   
   </form></p><br>
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