
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
<h1 id="out">Payer Details: </h1>
<p line-height="130%"><br>
<?php
$name=$_POST['user'];
echo $name;
$db=mysqli_connect('localhost','root','','manuna');
if(!$db){echo 'failed';}

$query="SELECT s.firstname,s.lastname,s.payer,s.country,s.type,p.fee,s.roll,s.address,s.phone,s.email FROM  payment p, info s WHERE s.roll = '$name' and s.type=p.type and s.roll=p.roll group by s.type";
$result=mysqli_query($db,$query);
if(!$result){
	header("Location:payment.php");
}

if(isset($_POST['back'])){
	header("Location:history.php");}



?>
<table width="100%" id="historytable" height="60" cellspadding="3" border="1">
	<tr id="th2">
			
			<td>First Name</td>
			<td>Last Name</td>
			<td>Relation</td>
			<td>Country</td>
			<td>Fee Type</td>
			<td>Fee Amount</td>
			<td>Card No</td>
			<td>Address</td>
			<td>Phone</td>
			<td>Email</td>
	</tr>
	</tr>

	<?php if( mysqli_num_rows( $result )==0 ){
        echo '<tr><td colspan="10">No records found</td></tr>';
      }else{ while($row=mysqli_fetch_array($result))
	{	
		echo "<tr>";
		
			echo "<td>".$row['firstname']."</td>";
			echo "<td>".$row['lastname']."</td>";
			echo "<td>".$row['payer']."</td>";
			echo "<td>".$row['country']."</td>";
			echo "<td>".$row['type']."</td>";
			echo "<td>".$row['fee']."</td>";
			echo "<td>".$row['roll']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['phone']."</td>";
			echo "<td>".$row['email']."</td>";
	  echo "</tr>";}}
	mysqli_close($db);
?></table>
			
 <br />
 <form name="rollno" action="payment.php" method="post">
 <input type="hidden" name="user" value="<?php 
echo $name; ?>">
 <input type="submit"  id="sub2" onmouseover="this.style.backgroundColor='#483D8B'" onmouseout="this.style.backgroundColor='#00008B';return true" name="back" value="Back to History!!">
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