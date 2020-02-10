<?php

include_once 'db2.php';

//$query_profile = "SELECT MAX(id),hname,newrank,updatedby from promotion GROUP BY hname;";
$query_profile = "SELECT a.* FROM rankactivity a LEFT OUTER JOIN rankactivity b ON a.hname = b.hname AND a.id < b.id WHERE b.hname IS NULL;";
?>