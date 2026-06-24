<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="checkbox" name="hoby[]|" value="cricket">cricket
        <input type="checkbox" name="hoby[]|" value="music">music
        <input type="checkbox" name="hoby[]|" value="reading">reading
        <input type="submit" value="Submit">

    </form>
    <?php
    if(isset($_POST['hoby']))
        {
            $hoby = $_POST['hoby'];
            foreach($hoby as $h)
                echo "your hoby is: " . $h . "<br>";
        }
    ?>
    </body>
</html>