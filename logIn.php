
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
<?php
$showAlert = false;
if($_SERVER["REQUEST_METHOD"]="POST"){
    require 'partials/_dbconnect.php';
    $user = $_POST["name"];
    $pass = $_POST["pass"];
    $hash = password_hash("$pass", PASSWORD_DEFAULT);

    $sql = "SELECT * FROM `user` WHERE `username` = '$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    if($row > 0){
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify("$hash",$row['password'])){
                $showAlert = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $user;
                header("location:home.php");
            }
        }
    }
    else{
        echo "Invalid credentials !";
    }
}
else{
    die("Error!" . mysqli_connect_error());
}
?>
    <?php
        if($showAlert == true){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Welcome ' . $user . '</strong> You have logged in successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    ?>
        <form action="logIn.php" method="post">
            <label for="name" name="name">Username</label>
            <input type="name" name="name">
            <label for="password" name="pass">Password</label>
            <input type="password" name="pass">
            <button type="submit">log in</button>
        </form>
</body>
</html>>