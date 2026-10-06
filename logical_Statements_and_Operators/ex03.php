<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$sum = $num1 + $num2;

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
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php 
if ($num1 !== $num2)
 echo "Sum = ".$sum;
else 
    echo "Sum =".($sum * 3 );
?>