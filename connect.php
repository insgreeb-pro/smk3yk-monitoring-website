<?php
    $conn = new mysqli("localhost","root","insgreeb","logger1");

    // Check connection
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }
    else {
        // test purpose
        // echo 'sukses';
    }
?> 
