<?php
$userName = $_SESSION['userName'];
$userID = $_SESSION['userId'];
$userPw = $_SESSION['userPw'];
$ph01 = $_SESSION['ph01'];
$ph02 = $_SESSION['ph02'];
$ph03 = $_SESSION['ph03'];
$eDmain = $_SESSION['eDomain'];
$emailURL = $_SESSION['emailURL'];
$birthday = $_SESSION['birthday'];

$connect = mysql_connect('localhost', 'hyun', 's37540086#');
mysql_select_db('phpStudy', $connect);

$sql = 'insert into memeber(name, id, pw, phone, email, birthday)';
//$sql .= 'value('..');';
 
?>
