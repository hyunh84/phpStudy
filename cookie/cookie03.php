
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scale=no," />
<meta name="format-detection" content="telephone=no" />

<title>성적관리 시스템</title>

<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/base.css" />
<style type="text/css">

</style>


</head>
<body>

<?php

$a = setcookie('userid', '');
$b = setcookie('username', '');

if($a && $b) {

    echo "userid와 username 삭제완료";
}

?>


</body>
</html>
