<?php

$file = '../txt/removefile.txt';
$txt = 'unlink() 함수 사용해서 파일 삭제하기.';


echo $txt;
file_put_contents($file, $txt);

?>
