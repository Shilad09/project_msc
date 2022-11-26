<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product details</title>
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>
<body>
    <?php include 'partials/_navbar.php'; ?>
    <div class="details">
        <?php
        include 'partials/_dbconnect.php';
        $id = $_GET['pid'];
        $sql = "SELECT * FROM `grocery` WHERE `gid` = '$id'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['gname'];
            $desc = $row['description'];
            $price = $row['gprice'];
            if($id == 1){
                echo '<h1 id="headDetails">'.$name.'</h1>
                <div class="bodyDetails">
                <img id="imgDetails" src="potato.jpg" alt="">
                <div class="rightBodyDetails">
                <h3>Product-Description</h3>
                <div class="descBodyDetails">'.$desc.'</div>
                <div class="priceBodyDetails">'.$price.'</div>
                </div>';
            }
            else if($id == 2){
                echo '<h1 id="headDetails">'.$name.'</h1>
                <div class="bodyDetails">
                <img id="imgDetails" src="onion.jpg" alt="">
                <div class="rightBodyDetails">
                <h3>Product-Description</h3>
                <div class="descBodyDetails">'.$desc.'</div>
                <div class="priceBodyDetails">'.$price.'</div>
                </div>';
            }
            else if($id == 3){
                echo '<h1 id="headDetails">'.$name.'</h1>
                <div class="bodyDetails">
                <img id="imgDetails" src="Lemon.jpg" alt="">
                <div class="rightBodyDetails">
                <h3>Product-Description</h3>
                <div class="descBodyDetails">'.$desc.'</div>
                <div class="priceBodyDetails">'.$price.'</div>
                </div>';
            }
            else if($id == 4){
                echo '<h1 id="headDetails">'.$name.'</h1>
                <div class="bodyDetails">
                <img id="imgDetails" src="tomato2.jpg" alt="">
                <div class="rightBodyDetails">
                <h3>Product-Description</h3>
                <div class="descBodyDetails">'.$desc.'</div>
                <div class="priceBodyDetails">'.$price.'</div>
                </div>';
            }
            else if($id == 5){
                echo '<h1 id="headDetails">'.$name.'</h1>
                <div class="bodyDetails">
                <img id="imgDetails" src="cauliflower.jpg" alt="">
                <div class="rightBodyDetails">
                <h3>Product-Description</h3>
                <div class="descBodyDetails">'.$desc.'</div>
                <div class="priceBodyDetails">'.$price.'</div>
                </div>';
            }
            else if($id == 6){
                echo '<h1 id="headDetails">'.$name.'</h1>
                <div class="bodyDetails">
                <img id="imgDetails" src="greenchilli.jpg" alt="">
                <div class="rightBodyDetails">
                <h3>Product-Description</h3>
                <div class="descBodyDetails">'.$desc.'</div>
                <div class="priceBodyDetails">'.$price.'</div>
                </div>';
            }
            else if($id == 7){
                echo '<h1 id="headDetails">'.$name.'</h1>
                <div class="bodyDetails">
                <img id="imgDetails" src="carrot.jpg" alt="">
                <div class="rightBodyDetails">
                <h3>Product-Description</h3>
                <div class="descBodyDetails">'.$desc.'</div>
                <div class="priceBodyDetails">'.$price.'</div>
                </div>';
            }
            else if($id == 8){
                echo '<h1 id="headDetails">'.$name.'</h1>
                <div class="bodyDetails">
                <img id="imgDetails" src="mastered-oil.jpg" alt="">
                <div class="rightBodyDetails">
                <h3>Product-Description</h3>
                <div class="descBodyDetails">'.$desc.'</div>
                <div class="priceBodyDetails">'.$price.'</div>
                </div>';
            }
        }
        ?>
    </div>
    <?php include 'partials/_footer.php'; ?>
</body>
</html>