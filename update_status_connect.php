<?php
session_start();
include_once 'db.php';

if (isset($_POST['submit'])) {
	$hname = mysqli_real_escape_string($conn, $_POST['hname']);
	$status = mysqli_real_escape_string($conn, $_POST['status']);
}
	//error handlers 
	//check for empty fields
    $posted_data=$_SESSION["hname"];
    $_POST['updatedby']=$posted_data;
    $updatedby = $_POST['updatedby'];

	if (empty($hname)|| empty($status)|| empty($updatedby)) 
	{ 
	   header("location: update_status?entryform=empty");
		exit();
	}

else
		{
		$sql="SELECT * FROM logindetail WHERE hname ='$hname'";
		$result= mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);

		if($resultcheck < 1)
		{
			header("location: update_status?login=error_wrong_username_you_are_updating");
			exit();
		}
	
	   else
	   {
	   	$row = mysqli_fetch_assoc($result);
	   	$date=date("d-m-Y h:ia");
					$sql= "UPDATE logindetail SET status='$status', updatedby='$updatedby', updatedate='$date' WHERE hname='$hname'";
					mysqli_query($conn,$sql);
					header('location: signup_history');
       }
}

?>