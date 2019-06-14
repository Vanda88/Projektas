<?php
    require __DIR__ . '/../app/src/app.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="PHP forma">
        <title>Forma</title>
        <link href="../app/css/style.css" rel="stylesheet" >
    </head>
    <body class="main">
        <?php
            include('../app/views/header.php');
            include('../app/views/content.php');
            include('../app/views/footer.php');
        ?>
    </body>
</html>
