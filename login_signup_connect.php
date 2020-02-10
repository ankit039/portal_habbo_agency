<?php
session_start();
include_once 'db.php';

$var= 0;
if(isset($_POST['login_submit']))
{
	$hname = mysqli_real_escape_string($conn, $_POST['hname']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$var= 1;
}
if(isset($_POST['signup_submit']))
{
	$hname = mysqli_real_escape_string($conn, $_POST['hname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$cpwd = mysqli_real_escape_string($conn, $_POST['cpwd']);
	$var= 2;
}
//login
if($var === 1)
{
if(empty($hname) || empty($password))
{
	    $sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','login empty');"; mysqli_query($conn,$sql);
		header("location: login_signup?login=empty");
		exit();
	}
		else
		{

		$sql="SELECT * FROM logindetail WHERE hname ='$hname'";
		$result= mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);

		if($resultcheck < 1)
		{
			$sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','login wrong username');"; mysqli_query($conn,$sql);
			header("location: login_signup?login=error_wrong_username");
			exit();
		}
	
	   else
	   {
	   	$row = mysqli_fetch_assoc($result);
			if (count($row)) 
		{
	   	if ($row["status"]=='Unverified')
	   	{
	   		$sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','login banned or unverified');"; mysqli_query($conn,$sql);
			header("location: login_signup?login=status_Unverified_account_or_Banned");
			exit();
		}
		else
		{
				if($password === $row['password'])
				{ 
				   $sendAdminPanel = array(13,14);
				   $sendSeniorPanel = array(7,8,9,10,11,12);
				   $sendJuniorPanel = array(0,1,2,3,4,5,6);
				   $notallowed = array('-1');
				if(in_array($row['rank_code'],  $sendAdminPanel))
				  {
				  	//admin panel
				  	$sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','login admin');"; mysqli_query($conn,$sql);
					header("location:home_1");
					$_SESSION["hname"] = "$hname";
					$_SESSION["rank_code1"] = "admin";
					exit();
				  }
				  elseif(in_array($row['rank_code'],  $sendSeniorPanel))
				  {
				  	//senior panel
				  	$sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','login senior');"; mysqli_query($conn,$sql);
					header("location:home_2");
					$_SESSION["hname"] = "$hname";
					$_SESSION["rank_code2"] = "senior";
					exit();
				  }
				  elseif(in_array($row['rank_code'],  $sendJuniorPanel))
				  {
				  	//junior panel
				  	$sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','login junior');"; mysqli_query($conn,$sql);
					header("location:home_3");
					$_SESSION["hname"] = "$hname";
					$_SESSION["rank_code3"] = "junior";
					$_SESSION["check"] = 1;
					exit();
				  }
				  elseif(in_array($row['rank_code'],  $notallowed))
				  {
				  	//not allowed panel
				  	$sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','login banned or unverified');"; mysqli_query($conn,$sql);
					header("location: login_signup?login=status_Unverified_account_or_Banned");
					exit();
				  }
				}

				else
				{
					$sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','login wrong password');"; mysqli_query($conn,$sql);
					header("location: login_signup?login=error_wrong_password");
						exit();
				}
			
	        }
	    }
}
}
}
//signup
elseif($var === 2)
{
	if (empty($hname)|| empty($email)||empty($pwd)|| empty($cpwd)) 
	{
		$sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','signup empty');"; mysqli_query($conn,$sql);
		header("location: login_signup?signup=empty");
		exit();
	}
	else
	{
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) 
			{
			$sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','signup not valid mail');"; mysqli_query($conn,$sql);
			header("location: login_signup?signup=notvalid_email");
			exit();
			}
			else if(($pwd)!=($cpwd))
			{
			$sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','signup bot password not matched');"; mysqli_query($conn,$sql);
			header("location: login_signup?signup=password_not_match");
			exit();
			}
				$sql = "SELECT * FROM logindetail WHERE hname='$hname'";
				$result = mysqli_query($conn,$sql);
				$resultcheck = mysqli_num_rows($result);

				if($resultcheck > 0)
				{
					$sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','signup but username taken');"; mysqli_query($conn,$sql);
					header("location: login_signup?signup=habbo_username_taken");
					exit();
				} 
                   
                    $status='Unverified';
                    $date=date("d-m-Y h:ia");
           			$row = mysqli_fetch_assoc($result);
					$sql= "INSERT INTO logindetail (hname,email,password,status,rank_code,ip,signupdate) VALUES 
					('$hname','$email','$pwd','$status','-1','$store_ip','$date');";
					mysqli_query($conn,$sql);
					$sql= "INSERT INTO profiledetail (hname,email) VALUES 
					('$hname','$email');";
					mysqli_query($conn,$sql);
					$sql= "INSERT INTO rankactivity (hname,oldrank,newrank,updatedby,updatedate,type) VALUES 
					('$hname','N/A','Recruit','ADMIN','$date','1');";
					mysqli_query($conn,$sql);

			if($hname  && $email && $pwd && $status && $store_ip && $date) 
			{
			$sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','signup sucess');"; mysqli_query($conn,$sql);
            header('location: login_signup?signup=Successfull_wait_to_get_verified');
            } 
							exit();
				
	}
}
else
{
	//not valid login or signup
	$sql= "INSERT INTO iptrack (hname,type,ip,reason) VALUES ('$hname','$var','$store_ip','unauthorised access');"; mysqli_query($conn,$sql);
	header('location: login_signup?signup=you_cannot_access_this_page');
	exit();
}
?>