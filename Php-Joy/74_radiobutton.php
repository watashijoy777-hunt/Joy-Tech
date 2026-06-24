<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
        <input type="submit" value="Submit">

    </form>
    <?php
    if(isset($_POST['gender']))
        {
            echo "gender: " . $_POST['gender'];
        }
    ?>
</body>
</html>