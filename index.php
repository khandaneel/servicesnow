<?php include('config.php'); if(!isset($_SESSION['UserID'])) { echo '<script> window.location.href="index.php"; </script>';  } 
$_SESSION['token'] =uniqid();
$USERPROFILE=$classConn->fetchsingle('edge_user',array("Id"=>$_SESSION['UserID']));
if(!empty($USERPROFILE['courses'])) { $s1=1;} if(!empty($USERPROFILE['address'])) { $s2=1;}  if(!empty($USERPROFILE['phone'])) { $s3=1;}
if(!empty($USERPROFILE['profile_avatar'])) { $s4=1;} if(!empty($USERPROFILE['last_companies'])) { $s5=1;}
$tscore=($s1+$s2+$s3+$s4+$s5+5)*10;
$tscoren=($tscore*2.51);
 ?>


</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    My app demo
</body>
</html>