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
        else
        {
            include('404.php');
        }
    ?>
    <br><br><br><br>
</body>
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="../assets/js/scripts.js"></script>
<script>
    var typed2 = new Typed('#err', {
    strings: ["Error!", "Page not found.&#128546;", "Have you checked the link?"],
    typeSpeed: 150,
    backSpeed: 50,
    cursorChar: '_',
    loop: true
});
</script>
</html>