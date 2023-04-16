<?php

    if(!isset($_GET['p'])=='send'){
        header("location: index.php");
    } else {
        $cName = $_POST['cname'];
        $cMail = $_POST['cmail'];
        $cImage = $_POST['cimage'];
        $cMsg = $_POST['cmsg'];

        $sqlCom = "INSERT INTO tb_comment (c_name, c_email, c_img, c_comment) VALUES ('$cName','$cMail','$cImage','$cMsg')";

        mysqli_query($conn, $sqlCom) or die("<script>window.location.replace('index.php?error=1')</script>");

        mysqli_close($conn);

        echo "<script>window.location.replace('index.php?msg=1')</script>";
    }

