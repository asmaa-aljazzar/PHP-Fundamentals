<?php

$num = $_POST["num"];
if ($num >= 0){
    if ($num < 18)
        echo "Is no eligible to vote";
    else echo "Eligible to vote";

} else 
 echo "Negative numbers are invalid."

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temp</title>
</head>

<body>
    <form action="" method="POST">
        <label for="temp">Enter your age</label>
        <input type="number" id="num" name="num" value="<?php echo $temp ?>" />
        <button type="submit">Submit</button>
    </form>
</body>

</html>