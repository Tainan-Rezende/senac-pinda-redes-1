<!-- 
    ###############################

    Tainan Alison Borges Rezende
    Senac Pindamonhangaba

    ###############################

    LinkedIn: https://www.linkedin.com/in/tainan-rezende/
    Github: https://github.com/Tainan-Rezende
    Instagram: https://www.instagram.com/tainan.rezende/

    ###############################
-->
<?php 
    include('inc/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac - Redes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
</head>
<body>
    <?php include('inc/navbar.php'); ?>

    <!-- HEADER -->
    <header></header>

    <?php 
        if(!isset($_GET['p'])) require_once('inc/home.php'); else {
            switch($_GET['p']) {
                case 'send': require_once('inc/comment.inc.php'); break;
                case 'comment': require_once('inc/comment.php'); break;
                default:require_once('inc/error.php'); break;
            }
        }
    ?>

    <footer>
        &copy; <?=date('Y');?> <a href="#">Senac Pindamonhangaba</a>. Created by <a href="#">Tainan Rezende</a>. All rights reserved.
    </footer>

    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/7b8c97e5d3.js" crossorigin="anonymous"></script>
</body>
</html>