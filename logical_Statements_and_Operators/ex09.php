<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];
if ($op == "+")
    echo "sum" . ($num1 + $num2);
if ($op == "-")
    echo "sub" . ($num1 - $num2);
if ($op == "*")
    echo "mult" . ($num1 * $num2);
if ($op == "/")
    echo "div" . ($num1 / $num2);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temp</title>
</head>

<body>
    <form action="" method="POST">
        <label for="temp">Enter the 1st number</label>
        <input type="number" id="num1" name="num1" value="<?php echo $num1 ?>" />
        <label for="temp">Enter the 2nd number</label>
        <input type="number" id="num2" name="num2" value="<?php echo $num2 ?>" />
        <label for="temp">Enter the operation</label>
        <input type="text" id="op" name="op" value="<?php echo $op ?>" />
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php
if ($sum == 30)
    echo 30;
else
    echo "false";
?>