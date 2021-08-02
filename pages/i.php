<?php require_once("bin/core.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Chase - Personal Information</title>
</head>
<body>
    <?php
        $x = $_GET['q'];
        $y = $parser->checkURL($x);
        //echo $y;
        if($y == 0)
        {
            include('views/home.php');
        }
    ?>
</body>
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</html>