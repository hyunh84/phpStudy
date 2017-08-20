<?php

session_start();

$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$time = $_SESSION['time'];


$time = date('Y-m-d(H:i:s)', $time);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scale=no," />
<meta name="format-detection" content="telephone=no" />

<title>SESSION</title>

<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/base.css" />
<style type="text/css">

ul {width:300px; margin:50px auto; border:1px solid #ccc;}
div {text-align:center; }
div a {display:inline-block; height:25px; padding:0 10px; line-height:25px; border:1px solid #000;}

</style>


</head>
<body>

<ul>
    <li>
        <span>ID :</span>
        <?=$userid?>
    </li>
    <li>
        <span>name :</span>
        <?=$username?>
    </li>
    <li>
        <span>time :</span>
        <?=$time?>
    </li>
</ul>
<div>
<a href="session02.php">SESSION 등록</a>
<a href="session03.php">SESSION 삭제</a>
</div>
</body>
</html>
