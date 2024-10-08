<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        session_start();
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']); // Clear the message after displaying it
        }
        ?>
    <img src="img/thank.png" style="width: 350px; height:300px;" alt="">
</body>
</html>