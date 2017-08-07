<?php

$filename = '../txt/readme.txt';

if (is_writable($filename)) {
    echo 'readme.txt';
    echo 'The file is writable';
} else {
    echo 'readme.txt';
    echo 'The file is not writable';
}

?>
