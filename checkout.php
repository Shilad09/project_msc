<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>
<body>
    <?php include 'partials/_navbar.php'; ?>

    <div class="center">
        <div class="leftCenter" id="left">
            <h1>Check out</h1>
            <div class="boxSummary">
                <h3>Order summary</h3>
            </div>
        </div>
        <div class="rightCenter" id="right">
            <h3>Payment method</h3>
            <h4>cash on Delivary</h4>
            <div class="boxPayment"></div>
            <button class="btn">Order</button>
        </div>
    </div>
    <div class="bottomC">
        <div class="headBottomC">
            <img src="defaultuser.jpg" alt="#">
            <h2>Recipient information</h2>
        </div>
        <div class="bodyBottomC">
            <div class="nameBodyBottomC">
                <h4>Full name</h4>
                <div class="boxInfoName"></div>
            </div>
                <div class="phoneBodybottomC">
                    <h4>Phone Number</h4>
                    <div class="boxInfoPhone"></div>
                </div>
                <div class="addressBodyBottomC">
                    <h4>Address</h4>
                    <div class="boxInfoAddress"></div>
                </div>
        </div>
    </div>
    <?php include 'partials/_footer.php'; ?>
</body>
</html>