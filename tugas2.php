<?php

$data = ["1.3.5", "2.1.6", "4.0.7", "0.3.6", "0.3.4", "1.5.3"];

foreach( $data as $data1 ) {
    echo $data1;
    echo "<br>";
}

echo "Diubah menjadi seperti berikut";
echo "<br>";

$data_urut = ["1.3.5", "2.1.6", "4.0.7", "0.3.6", "0.3.4", "1.5.3"];
sort($data_urut);

foreach( $data_urut as $data_urut1 ) {
    echo $data_urut1;
    echo "<br>";
}
?> 