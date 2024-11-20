<?php
$search = $_POST['name'];
if($search == ""){
    echo "";
    exit();
}
//connection
$server = "localhost";
$username = "root";
$password = "";
$db = "lict";

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$qry = "SELECT * FROM students WHERE name LIKE '%$search%' ORDER BY name";
$result = $conn->query($qry);
$data = "";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data = $data. "<p class=\"searchrow\"> Name: " . $row['name'] . "</p>";
    }
} else {
    $data = "No data found";
}
echo $data;
$conn->close();
?>