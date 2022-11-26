<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $showAlert = false;
    require 'partials/_dbconnect.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $uname = $_POST['name'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    if($pass == $cpass and $uname != null){
        $sqli = "SELECT * FROM `user` WHERE `username` = '$uname'";
        $exist = mysqli_query($conn, $sqli);
        $num = mysqli_num_rows($exist);
        if($num > 0){
            echo "Username already exists or password doesn't match !";
        }
        else{
            $hash = password_hash("$pass", PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user` (`username`, `password`, `date`) VALUES ('$uname', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
            }
    }
}
    }
?>
    <form action="signUp.php" method="post">
        <label for="name" name="name">User name</label>
        <input type="name" name="name">
        <label for="password" name="pass">Password</label>
        <input type="password" name="pass">
        <label for="password" name="cpass">Confirm password</label>
        <input type="password" name="cpass">
        <button type="submit">Sign up</button>
    </form>
</body>
</html>