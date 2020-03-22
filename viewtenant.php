<!DOCTYPE html>
<html>
<head>
	<title>view tenant information page</title>
</head>
<body>

<table bgcolor="pink" border="2">
<tr>
<td>FIRSTNAME</td>
<td>LASTNAME</td>
<td>MARITAL STATUS</td>
<td>GENDER</td>
<td>DATE OF BIRTH</td>
<td>EMAIL ADDRESS</td>
<td>STATE OF ORIGIN</td>
<td>L.G.A</td>
<td>PHONE NUMBER</td>
<td>ROOM CHOICE</td>
<td>RENT PERIOD</td>
<td>RESIDENTIAL ADDRESS</td>

</tr>
<?php 
$con4 = mysql_connect("localhost","root","");
mysql_select_db("campus",$con4); 
$sql = "select * from studentoff";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){

?>
<tr>
<td><?php echo $row['firstname'] ?></td>
<td><?php echo $row['lastname'] ?></td>
<td><?php echo $row['maritalstatus'] ?></td>
<td><?php echo $row['gender'] ?></td>
<td><?php echo $row['DateOfBirth'] ?></td>
<td><?php echo $row['emailAdd'] ?></td>
<td><?php echo $row['state'] ?></td>
<td><?php echo $row['lga'] ?></td>
<td><?php echo $row['phoneNumber'] ?></td>
<td><?php echo $row['room_choice'] ?></td>
<td><?php echo $row['rent_period'] ?></td>
<td><?php echo $row['homeAdd'] ?></td>
</tr>
<?php 
}
?>

</table>
<h2><a href="index.html"><p style="float: right; border: solid gray;">Back</p></a></h2>

</body>
</html>