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
    $id = $_GET['pid'];
    $val = $_POST['selectedData'];
    // echo "value is'.$val.'pid is'.$id.'";
    $sql = "SELECT * FROM `grocery` WHERE `gid` = '$id'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $price = $row['actualprice'];
        $x= $price*$val;
        if($id == 1){
            echo '<div class="orders">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="potato.jpg" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'KG</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 2){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        img id="imgDetails" src="onion.jpg" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'KG</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 3){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="Lemon.jpg" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'KG</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 4){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="tomato2.jpg" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'KG</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>';
    }
        else if($id == 5){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="cauliflower.jpg" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'pc</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 6){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="greenchilli.jpg" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'KG</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 7){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="carrot.jpg" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'KG</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 8){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="mastered-oil.jpg" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'L</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 9){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="milk.jpg" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'L</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 10){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="cheese.webp" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'KG</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 11){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="butter.webp" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'KG</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 12){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="eggs.webp" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'pc</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 13){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="chicken.webp" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'KG</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 14){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="chicken2.webp" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'KG</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 15){
            echo '<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="fish.jpg" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'KG</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
        else if($id == 16){
            echo'<div class="order">
        <h1>Order summary</h1>
        <div class="payment">
        <img id="imgDetails" src="fish2.webp" alt="">
        <div class=inputPayment>
        <h3>Cash on delivery</h3>
        <h4>Total ='.$x.'for'.$val.'KG</h4>
        <form action="order.php" method="post">
        <label for="text">Delivery address</label>
        <input type="text" name="address" id="address">
        <button type="submit" class=btn>Order now</button>
        </form>
        </div>
        </div>
        </div>';
    }
    }
?>
</body>
<?php include 'partials/_footer.php'; ?>
</html>