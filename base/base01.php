<?php

$nums = array(24,21,14,11,64,76,87,98,76,54,43,23,33,34,45,67,46,32,17,15);

//echo count($nums);
print_r($nums);

for($i=18; $i >= 0; $i--) {

    echo '<h1 style="font-size:15px;">'.$i.'</h1>';
    print_r($nums);
    // if($i == 0) echo '['.$nums[$i].', ';
    // if($i > 0 && $i <19) echo $nums[$i].', ';
    // if($i == 19) echo $nums[$i].']<br />';

    for($j = 0; $j <= $i; $j++) {
        if($nums[$j] > $nums[$j+1]) {
            $tmp_save = $nums[$j];
            $nums[$j] = $nums[$j+1];
            $nums[$j+1] = $tmp_save;
        }
    }

    // for($j=19; $j >= 0; $j--) {
    //
    // }

}

?>
