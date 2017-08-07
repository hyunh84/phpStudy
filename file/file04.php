<?php

$filename = '../txt/readme.txt';

if (is_readable($filename)) {
    echo 'readme.txt';
    echo 'The file is readable';
} else {
    echo 'readme.txt';
    echo 'The file is not readable';
}

?>
