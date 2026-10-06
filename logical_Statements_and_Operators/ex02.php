<?php

$temp = $_POST["temp"];
if ($temp < 20)
    echo "It's winter!";
else
    echo "It is summertime!";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temp</title>
</head>

<body>
    <form action="" method="POST">
        <label for="temp">Enter the tempareture</label>
        <input type="number" id="temp" name="temp" value="<?php echo $temp ?>" />
        <button type="submit">Submit</button>
    </form>
</body>

</html>