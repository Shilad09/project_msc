<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
<?php include 'partials/_navbar.php'; ?>
<h1>Daily Products</h1>
<div class="groceryContainer">
    <?php include 'partials/_dbconnect.php'; 
        $sql = "SELECT * FROM `grocery`";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['gid'];
            $name = $row['gname'];
            $desc = $row['description'];
            $price = $row['gprice'];
            if($id == 9){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="milk.jpg" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
            else if($id == 10){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="cheese.webp" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
            else if($id == 11){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="butter.webp" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
            else if($id == 12){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="eggs.webp" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
            else if($id == 13){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="chicken.webp" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
            else if($id == 14){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="chicken2.webp" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
            else if($id == 15){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="fish.jpg" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
            else if($id == 16){
                echo  '<div class=groceryBox>
                <img id="groceryImg" src="fish2.webp" alt="">
                <h3><a href="productDetails.php?pid='.$id.'">'.$name.'</a></h3>
                <h4>'.$price.'</h4>
                </div>';
            }
        }
        ?>
</body>
<?php include 'partials/_footer.php'; ?>
</html>