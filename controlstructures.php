<?php
// if else
$a = 10;
$b = 20;
if ($a > $b) {
    echo "a is greater than b";
} else {
    echo "b is greater than a";
}
echo "<br>";

//switch case
$day = "Monday";
switch ($day) {
    case "Sunday":
        echo "Today is Working Day";
        break;
    case "Monday":
        echo "Today is Working Day";
        break;
    case "Tuesday":
        echo "Today is working day";
        break;
    case "Wednesday":
        echo "Today is working day";
        break;
    case "Thursday":
        echo "Today is working day";
        break;
    case "Friday":
        echo "Today is working day";
        break;
    case "Saturday":
        echo "Today is holiday";
        break;
    default:
        echo "Invalid day";
}


//while loop
echo "<br>";
$i = 1;
while ($i <= 5) {
    echo "The number is " . $i . "<br>";
    $i++;
}

//do while loop
echo "<br>";
$i = 1;
do {
    echo "The number is " . $i . "<br>";
    $i++;
} while ($i <= 5);

//for loop
echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "The number is " . $i . "<br>";
}