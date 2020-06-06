<?php
//konesti ke database
$conn = mysqli_connect("localhost", "root", "password", "phpdasar");


function query($qwery) {
    global $conn;
    $result = mysqli_query($conn, $qwery);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

?>