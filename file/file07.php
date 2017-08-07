<?php

$file = '../txt/readme.txt';
$newfile = 'example.txt.bak';

echo '<h2>File 존재유무 확인.</h2>';

if(!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}

?>
