<?php
//form handling in PHP
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == "" || $password == ""){
        echo "Email or Password cannot be empty";
        exit();
    }
    if(strlen($password) < 8){
        echo "Password must be at least 8 characters";
        exit();
    }
    echo "Email: ".$email."<br>";
    echo "Password: ".$password;
}
?>
<html>
    <head>
        <title>Form Handling in PHP</title>
    </head>
    <body>
        <form action="formhandling.php" method="post">
            Email: <input type="email" name="email"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>