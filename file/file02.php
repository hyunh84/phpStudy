<?php

$file = '../txt/put_content.txt';
$txt = 'file_put_contents(); 함수를 이용한 파일에 문자열 저장방법 입니다.';


echo $txt;
file_put_contents($file, $txt);


?>
