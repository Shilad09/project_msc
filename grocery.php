<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery</title>
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>
<body>
<?php include 'partials/_navbar.php'; ?>
<h1>Grocery</h1>
<div class="groceryContainer">
    <?php include 'partials/_dbconnect.php'; 
        $sql = "SELECT * FROM `grocery`";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['gid'];
            $name = $row['gname'];
            $desc = $row['description'];
            $price = $row['gprice'];
            if($id == 1){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="potato.jpg" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
            else if($id == 2){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="onion.jpg" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
            else if($id == 3){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="Lemon.jpg" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
            else if($id == 4){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="tomato2.jpg" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
            else if($id == 5){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="cauliflower.jpg" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
            else if($id == 6){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="greenchilli.jpg" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
        }
        ?>
    </div>
    <?php include 'partials/_footer.php'; ?>
</body>
</html>