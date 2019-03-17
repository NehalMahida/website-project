<?php
include 'db.php';

	 $roll = $_POST["rollno"];
	 $pass = $_POST["passwd"];
//if(isset($_POST["rollno"] ,$_POST["passwd"] )){
$getID = "select Id  from LoginDetail where RollNo = '$roll' and password = '$pass'";
$result = $db->query($getID);
session_start();
$Id = $result->fetch_assoc();
$ID = $Id['Id'];
$_SESSION['key'] = $ID;

if($result->num_rows>0)
	echo '<script>window.location.href = "http://localhost/StudentInfo/shoData.php"</script> ';
else echo "invalid detail";
//}
?>