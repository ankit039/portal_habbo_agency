<?php
session_start();
include_once 'db.php';
include 'entry_form_error_connect.php';

if (isset($_POST['submit'])) {
	$habboname = mysqli_real_escape_string($conn, $_POST['habboname']);
	$division = mysqli_real_escape_string($conn, $_POST['division']);
	$division_rank = mysqli_real_escape_string($conn, $_POST['division_rank']);
	$state = mysqli_real_escape_string($conn, $_POST['state']);
}

	//error handlers 
	//check for empty fields
    $posted_data=$_SESSION["hname"];
    $_POST['updatedby']=$posted_data;
    $updatedby = $_POST['updatedby'];
    $date=date("d-m-Y h:ia");


	if (empty($habboname)|| empty($division)|| empty($division_rank)||empty($state)||empty($updatedby)) 
	{
	    header("location: entry_form1?entryform=empty");
		exit();
	}
	else
	{
		if($state == 1)
		{
		$sql="SELECT * FROM rankactivity where id IN (SELECT MAX(id) FROM rankactivity WHERE hname ='$habboname') AND type = 1";
		$result= mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		//$row = mysqli_fetch_assoc($result);
	    //$oldrank = $row["type"];
		if($resultcheck < 1)
		{
		    //not found
		    $sql="SELECT * FROM rankactivity where id IN (SELECT MAX(id) FROM rankactivity WHERE hname ='$habboname') AND type = 2";
			$result= mysqli_query($conn, $sql);
			$resultcheck = mysqli_num_rows($result);
		    $row = mysqli_fetch_assoc($result);
			$oldrank = $row["newrank"];
			//oldrank
			$sql= "INSERT INTO rankactivity (hname,oldrank,newrank,updatedby,updatedate,type) VALUES ('$habboname','$oldrank','$division_rank','$updatedby','$date','1');";
			mysqli_query($conn,$sql);
			$sql= "UPDATE logindetail SET rank_code='$division', updatedby='$updatedby', updatedate='$date' WHERE hname='$habboname'";
			mysqli_query($conn,$sql);
			header('location: l_profile?username='.$habboname);
			exit();
		}
	   else
	   {
	   	    //found
	   		$row = mysqli_fetch_assoc($result);
			$oldrank = $row["newrank"];
			echo $oldrank;
			$sql= "INSERT INTO rankactivity (hname,oldrank,newrank,updatedby,updatedate,type) VALUES ('$habboname','$oldrank','$division_rank','$updatedby','$date','1');";
			mysqli_query($conn,$sql);
			$sql= "UPDATE logindetail SET rank_code='$division', updatedby='$updatedby', updatedate='$date' WHERE hname='$habboname'";
			mysqli_query($conn,$sql);
			header('location: l_profile?username='.$habboname);
			exit(); 
	    }
			
		}
		elseif($state == 2)
		{
		$sql="SELECT * FROM rankactivity where id IN (SELECT MAX(id) FROM rankactivity WHERE hname ='$habboname')AND type = 1";
		$result= mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		echo $resultcheck;
		if($resultcheck < 1)
		{
		    //not found
		    $oldrank="Recruit";
			$sql= "INSERT INTO rankactivity (hname,oldrank,newrank,updatedby,updatedate) VALUES ('$habboname','$oldrank','$division_rank','$updatedby','$date');";
			mysqli_query($conn,$sql);
			$sql= "UPDATE logindetail SET rank_code='$division', updatedby='$updatedby', updatedate='$date' WHERE hname='$habboname'";
			mysqli_query($conn,$sql);
			header('location: l_profile?username='.$habboname.'&it_cannot_be_updated');
			exit();
		}
	   else
	   {
	   	    //found
	   		$row = mysqli_fetch_assoc($result);
			$oldrank = $row["newrank"];
			$sql= "INSERT INTO rankactivity (hname,oldrank,newrank,updatedby,updatedate,type) VALUES ('$habboname','$oldrank','$division_rank','$updatedby','$date','2');";
			mysqli_query($conn,$sql);
			$sql= "UPDATE logindetail SET rank_code='$division', updatedby='$updatedby', updatedate='$date' WHERE hname='$habboname'";
			mysqli_query($conn,$sql);
			header('location: l_profile?username='.$habboname);
			exit(); 
	    }
	}
}
?>