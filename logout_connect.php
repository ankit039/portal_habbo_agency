<?php
session_start();
$_SESSION["hname"]=""; 
$_SESSION["rank_code1"]=""; 
$_SESSION["rank_code2"]=""; 
$_SESSION["rank_code3"]=""; 
header("location: login_signup?session_destroyed");
?>