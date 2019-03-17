<?php
include 'db.php';
error_reporting(0);
session_start();
$id = $_SESSION['key'];
$FirstName = $_POST['fn'];
$LastName = $_POST['ln'];
$MiddleName = $_POST['mn'];
$Address = $_POST['ad'];
$mobileNumber = $_POST['mo'];
$EmailId = $_POST['em'];
$userName = $_POST['un'];
//echo "Id : $id";
$getID = "select * from detail where  user_id = $id";
//echo "$id";
$result = $db->query($getID);
if($result->num_rows){
	$update = "update  detail 
	 set
	 user_name = '$userName', 
	 first_name='$FirstName', 
	 last_name='$LastName' , 
	 address='$Address', 
	 middle_name='$MiddleName' , 
	 emailadd='$EmailId' , 
	 mobile='$mobileNumber' 
	 where user_id='$id'";
	$upda = $db->query($update);
if($upda){
	echo "Detail Update";
}
else{
	echo "We have Some problem";
}

}
else{
$insert = "insert into detail values ('$userName','$id','$FirstName','$LastName','$Address','$MiddleName','$EmailId','$mobileNumber')";
$inse = $db->query($insert);
if($inse){
	echo "Detail Saved";
}
else{
	echo "We have Some problem";
}
}


?>
