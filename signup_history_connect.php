<?php

include_once 'db2.php';

$query = "SELECT * FROM logindetail";
if ($checkrun = mysqli_num_rows(mysqli_query($mysqli,$query))>0) {
  $new=0;
} else {
  header("location:notfound");
}
?>