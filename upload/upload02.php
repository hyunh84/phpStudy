<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scale=no," />
<meta name="format-detection" content="telephone=no" />

<title>Caffe bene</title>

<style type="text/css">

body,html {margin:0; padding:0;}
*{margin:0; padding:0;}

</style>

</head>
<body>
<h1>PHP 디렉토리 제어 예제샘플</h1>
<?php

// echo $_FILES['userfile']['name'];
// echo $_FILES['userfile02']['name'];
//
// exit;
ini_set("display_errors", "1");
$uploaddir = '/Applications/mampstack-5.6.31-0/apache2/htdocs/phpStudy/upload/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$uploadfile02 = $uploaddir . basename($_FILES['userfile02']['name']);

echo '<div style="width:300px; margin:0 auto; background:#ff0;">';
echo '$uploadfile'.$uploadfile.'<br><br>';
echo '$uploadfile02'.$uploadfile02;
echo '</div>';


echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo $_FILES['userfile']['tmp_name']." 파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
} else {
    print $_FILES['userfile']['tmp_name']." 파일 업로드 공격의 가능성이 있습니다!\n";
}
if (move_uploaded_file($_FILES['userfile02']['tmp_name'], $uploadfile02)) {
    echo $_FILES['userfile02']['tmp_name']." 파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
} else {
    print $_FILES['userfile02']['tmp_name']." 파일 업로드 공격의 가능성이 있습니다!\n";
}
echo '자세한 디버깅 정보입니다:';
print_r($_FILES);

print "</pre>";


?>
<p>MAX_FILE_SIZE : 파일 사이즈를 적정 용량으로 잡아줘야 오류안남</p>

<img src="<?=$_FILES['userfile']['name']?>" />
<img src="<?=$_FILES['userfile02']['name']?>" />

</body>
</html>
