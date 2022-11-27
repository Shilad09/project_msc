<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>
<body>
<?php include 'partials/_navbar.php'; ?>
<?php  include 'partials/_dbconnect.php';
    // session_start();
    // if($_SESSION['loggedin'] == true){
    // }


            $val = $_POST['select'];
            $id = $_GET['pid'];
            
            echo "value is'.$val.'pid is'.$id.'";

?>
</body>
<?php include 'partials/_footer.php'; ?>
</html>