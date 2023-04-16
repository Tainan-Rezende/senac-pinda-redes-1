<?php

    $conn = new mysqli('localhost', 'root', '', 'dbsenac');

    if($conn -> connect_errno){
        echo "Connection failed: " . $conn -> connect_error;
        exit();
    }
