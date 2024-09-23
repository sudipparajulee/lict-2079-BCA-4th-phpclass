<?php 
$server = "localhost";
$user = "root";
$pass = "";
$db = "lict";

//connect to database
$conn = new mysqli($server, $user, $pass, $db);

//check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//query to select data from marks
$qry = "SELECT students.name, subjects.name as subjectname, subjects.fullmarks, subjects.passmarks, marks.obtainedmarks
        FROM marks
        INNER JOIN students ON marks.student_id = students.id
        INNER JOIN subjects ON marks.subject_id = subjects.id
        WHERE students.id = 2";

$qry2 = "SELECT avg(obtainedmarks) as avgmarks, sum(obtainedmarks) as totalmarks
        FROM marks
        WHERE student_id = 2";

$result = $conn->query($qry);
$result2 = $conn->query($qry2);

while($row = $result->fetch_assoc()){
    echo "Name: " . $row['name'] . "<br>";
    echo "Subject: " . $row['subjectname'] . "<br>";
    echo "Full Marks: " . $row['fullmarks'] . "<br>";
    echo "Pass Marks: " . $row['passmarks'] . "<br>";
    echo "Obtained Marks: " . $row['obtainedmarks'] . "<br>";
    echo "<br>";
}

while($row2 = $result2->fetch_assoc()){
    echo "<h3>Average Marks: " . $row2['avgmarks'] . "</h3>";
    echo "<h3>Total Marks: " . $row2['totalmarks'] . "</h3>";
}

$conn->close();
?>