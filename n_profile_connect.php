<?php
include_once 'db2.php';

$query_profile = "SELECT * FROM profiledetail where hname='$habboname'";
$query_pro = "SELECT * FROM rankactivity where hname='$habboname'";
$query_status = "SELECT status FROM logindetail where hname='$habboname'";
if ($checkrun = mysqli_num_rows(mysqli_query($mysqli,$query_profile))>0) {
  $new=0;
} else {
  header("location:notfound");
}
?>