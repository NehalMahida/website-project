<?php
include 'db.php';

 $roll = $_POST["roll"];
 $pass = $_POST["pass"];

 $getID = "select Id  from LoginDetail where RollNo = '$roll'";
 $result = $db->query($getID);
 if($result->num_rows>0){
 	echo "Invelid Detail";
 }
 else{
 	$insert = "insert into logindetail values ('','$roll','$pass')";
 	$inse = $db->query($insert);
    if($inse){
    $getID = "select Id  from LoginDetail where RollNo = '$roll'";
    $result = $db->query($getID);
    $row = $result->fetch_assoc();
    $id = $row['Id'];
    session_start();
    $_SESSION['key'] = $id;
    echo '<script>window.location.href = "http://localhost/StudentInfo/fill_details.html"</script> ';	
    }
 }


?>