<?php
include 'db.php';
session_start();
$key = $_SESSION['key'];
$_SESSION['key'] = $key;
//echo "Key : $key";
$GetInfor = "select * from detail where user_id = '$key'";
if($infor = $db->query($GetInfor)){
$row = $infor->fetch_assoc();

$FirstName = $row['first_name'];
$LastName = $row['last_name'];
$MiddleName = $row['middle_name'];
$Address = $row['address'];
$mobileNumber = $row['mobile'];
$IdNumber = $key;
$UserName = $row['user_name'];
$EmailId = $row['emailadd'];

					
}




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript"> 
		function editInfo(argument) {
			window.location.href = "http://localhost/StudentInfo/fill_details.html";
	}
	</script>
<button onclick="editInfo()">Edit Information</button><br><br>
<div>
	<table border="1" cellpadding="20px" cellspacing="0">
		<tr>
			<td>USER NAME : </td>
			<td><?php echo "$UserName";?></td>
			
		</tr>
		<tr>
			<td>FIRST NAME : </td>
			<td><?php echo "$FirstName";?></td>
			
		</tr>
		<tr>
			<td>Middle NAME : </td>
			<td><?php echo "$MiddleName";?></td>
			
		</tr>
		<tr>
			<td>Last NAME : </td>
			<td><?php echo "$LastName";?></td>
			
		</tr>
		<tr>
			<td>Email Address : </td>
			<td><?php echo "$EmailId";?></td>
			
		</tr>
		<tr>
			<td>Mobile Number : </td>
			<td><?php echo "$mobileNumber";?></td>
			
		</tr>
	</table>

</div>

</body>
</html>