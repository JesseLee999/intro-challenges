<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

<?php
    
$name = "  Bob  ";
$name = trim($name, ' ');
echo $name, "<br>";

$age = "thirty five";
echo str_replace('thirty five' , '35', $age), "<br>";
$ageNum = str_replace('thirty five' , '35', $age);

$job = "plumber";
echo $job, "<br>";

$carMake = " Toyota";
$carMake = ltrim($carMake);
echo $carMake, "<br>";

$carColour = "RED";
$carColour = strtolower($carColour);
echo $carColour, "<br>";

$car = $carColour.$carMake;
echo $car, "<br>";

$happy = true;
echo $happy, "<br>";

$time = "this many";
echo strlen($time), "<br>";
$timeLength = strlen($time);

$retire = "30";
echo $retire, "<br>";

$story = "$name is a $job. He drives a $car and works $timeLength hours a day.
He is $ageNum years old and is $retire years from retirement.
He is 








happy with his life.";
echo $story;


?>

</body>
</html>