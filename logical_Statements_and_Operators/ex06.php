<?php

$num = $_POST["num"];
if ($num >= 20 && $num <= 50)
    echo "true";
else
    echo "false";

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temp</title>
</head>

<body>
    <form action="" method="POST">
        <label for="temp">Enter a number</label>
        <input type="number" id="num" name="num" value="<?php echo $temp ?>" />
        <button type="submit">Submit</button>
    </form>
</body>

</html>