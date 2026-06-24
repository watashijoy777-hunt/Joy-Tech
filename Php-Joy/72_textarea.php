<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <form method="post">
        <textarea name="msg" placeholder="enter your message"></textarea><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['msg']))
        echo "your message is: " . $_POST['msg'];
    ?>
</body>
</html>