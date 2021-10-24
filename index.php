<?php
include_once './lib/config.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $servername;?> | Home</title>
    <?php include './engine/corecss.php' ?>
</head>
<body>
    <?php include './template/navbar.php';?>

    <?php include './template/footer.php';?>
</body>
</html>