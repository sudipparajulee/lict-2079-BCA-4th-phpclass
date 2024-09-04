<?php
//types of arrays
//indexed arrays
$names = array("Ram", "Shyam", "Hari");
// $names = ["Ram", "Shyam", "Hari"];
// echo $names[0],"<br>";
// echo $names[1],"<br>";
// echo $names[2],"<br>";
foreach($names as $name){
    echo $name,"<br>";
}
//sorting arrays
rsort($names);
foreach($names as $name){
    echo $name,"<br>";
}

//associative arrays
$age = array("Ram"=>25, "Shyam"=>30, "Hari"=>35);
// echo "Ram is ".$age['Ram']." years old","<br>";
// echo "Shyam is ".$age['Shyam']." years old","<br>";
// echo "Hari is ".$age['Hari']." years old","<br>";
ksort($age);
foreach($age as $key=>$value){
    echo $key." is ".$value." years old","<br>";
}

//multidimensional arrays
$students = array(
    array("Ram", 25),
    array("Shyam", 30),
    array("Hari", 35)
);
echo $students[0][0]." is ".$students[0][1]." years old","<br>";
echo $students[1][0]." is ".$students[1][1]." years old","<br>";
echo $students[2][0]." is ".$students[2][1]." years old","<br>";