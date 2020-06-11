<?php
$result = 0;
$input = 7;
echo 'input = ' . $input . '<br>';
for( $no = 1; $no <= $input; $no++ ) {

    for( $num = 1; $num <= $no; $num++ ) {   
        $result += $num;
        if( $num == $result ) {
          echo $num;
        } else {
          echo '+' . $num;
        }
    }
    
    echo ' = ' . $result . '<br>';
    unset($result);
    
}