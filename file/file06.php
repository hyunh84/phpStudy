<?php

$filename = '../txt/readme.txt';

if (file_exists($filename)) {
    echo "The file $filename exists <br /><br />";
} else {
    echo "The file $filename is not exists<br /><br />";
}

$filename02 = './txt/exists.txt';

if (file_exists($filename02)) {
    echo "The file $filename02 exists<br /><br />";
} else {
    echo "The file $filename02 is not exists<br /><br />";
}

?>
