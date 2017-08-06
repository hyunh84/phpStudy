<?php

$filename = './txt/readme.txt';
$filename02 = './txt/readme02.txt';

if (is_readable($filename)) {
    echo 'readme.txt';
    echo 'The file is readable';
} else {
    echo 'readme.txt';
    echo 'The file is not readable';
}

if (is_readable($filename02)) {
    echo 'readme02.txt';
    echo 'The file is readable';
} else {
    echo 'readme02.txt';
    echo 'The file is not readable';
}



?>
