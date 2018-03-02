
<html>
<head>
<link rel="stylesheet" media="all" type="text/css" href="text.css">
<title>History</title>

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
<h1 id="out">Payment History: </h1>
<p line-height="130%"><br>
<?php
$name=$_POST['user'];
echo $name;
$db=mysqli_connect('localhost','root','','manuna');
if(!$db){echo 'failed';}

$query="SELECT s.roll,s.type,s.category,s.college,f.fee,f.payer,b.bname,b.date,b.time FROM student s, bank b, payment f WHERE s.roll = '$name' and b.id=s.id and s.type=f.type and s.roll=f.roll group by s.roll,s.type";
$result=mysqli_query($db,$query);
if(!$result){
	header("Location:payment.php");
}

if(isset($_POST['back'])){
	header("Location:payment.php");}



?>
<table width="100%" id="historytable" height="60" cellspadding="3" border="1">
	<tr id="th2">
			
			<td>Roll Number</td>
			<td>Fee Type</td>
			<td>Category</td>
			<td>College</td>
			<td>Fee Amount</td>
			<td>Paid By</td>
			<td>Bank</td>
			<td>Date</td>
			<td>Time</td>
	</tr>
	</tr>

	<?php if( mysqli_num_rows( $result )==0 ){
        echo '<tr><td colspan="9">You have not paid anything</td></tr>';
      }else{ while($row=mysqli_fetch_array($result))
	{	
		echo "<tr>";
		
			echo "<td>".$row['roll']."</td>";
			echo "<td>".$row['type']."</td>";
			echo "<td>".$row['category']."</td>";
			echo "<td>".$row['college']."</td>";
			echo "<td>".$row['fee']."</td>";
			echo "<td>".$row['payer']."</td>";
			echo "<td>".$row['bname']."</td>";
			echo "<td>".$row['date']."</td>";
			echo "<td>".$row['time']."</td>";
	  echo "</tr>";}}
	mysqli_close($db);
?></table>
			
<div>
	<form name="history" action="details.php" method="post">
		<input type="hidden" name="user" value="<?php 
		echo $name; ?>" >
		<input type="submit" id="payer" onmouseover="this.style.backgroundColor='white'" onmouseout="this.style.backgroundColor='#FFEFD5';return true" value="Payer Details">
</form><div>

 <form name="rollno" action="history.php" method="post">


 <input type="submit"  id="sub2" onmouseover="this.style.backgroundColor='#483D8B'" onmouseout="this.style.backgroundColor='#00008B';return true" name="back" value="Back to Payment Page!!">
 </form>

<br>
<br>
 </div>
 </div>
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