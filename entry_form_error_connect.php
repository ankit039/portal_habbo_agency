<?php
include_once 'db.php';

$by = $_SESSION["hname"];
$to = $_POST['habboname'];


$sql="SELECT rank_code FROM logindetail WHERE hname='$to'";
$result= mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);
$row1 = mysqli_fetch_assoc($result);
$rank_code_to = $row1["rank_code"];

$sql="SELECT rank_code FROM logindetail WHERE hname='$by'";
$result= mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);
$row2 = mysqli_fetch_assoc($result);
$rank_code_by = $row2["rank_code"];

if($rank_code_to >= $rank_code_by)
{
			header('location: logout_connect?error_cannot_update_higher_or_equal_rank');
			exit();
}
?>