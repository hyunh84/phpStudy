<?php

$dir = './';

$filedir = scandir($dir);
$filedir02 = scandir($dir, 1);

print_r($filedir);
echo '<br /><br /><br />';
print_r($filedir02);

?>
