<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>
<body>
    <?php include 'partials/_navbar.php'; ?>

    <div class="center">
    <?php
    require 'partials/_dbconnect.php';
    // echo "$_SERVER['REQUEST_METHOD']";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['help'];

    $sql = "INSERT INTO `contact` (`name`, `email`, `text`, `time`) VALUES ('$name', '$email', '$text', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Error";
    }
}
?>
        <div class="leftCenter">
            <h2>Get in touch</h2>
            <form action="/project_msc/contact.php" method="post">
                <label name="name">Your name</label>
                <input type="text" for="name" name="name" id="myName" placeholder="Full name">
                <label for="email" name="email">Your email</label>
                <input type="email" name="email" for="email" id="myEmail" placeholder="yourmail@email.com">
                <label for="help">How can we help?</label>
                <textarea name="help" id="help" cols="30" rows="10" placeholder="Enter your message here"></textarea>
                <button type="submit" class="btn">Send my message</button>
            </form>
        </div>
        <div class="rightCenter">
            <h2>About</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam eos debitis ducimus cum, similique quos rerum modi necessitatibus nemo repellendus itaque porro recusandae dolor neque, ut voluptates voluptatum explicabo blanditiis reiciendis error optio iure iusto voluptate magnam? Odio repudiandae nam nulla consequuntur assumenda. Maiores dolorum ipsa dignissimos commodi error a necessitatibus architecto quisquam ab voluptas. Ipsum nobis soluta eius hic reprehenderit nemo ea quia dolore alias tempore voluptates architecto eos, explicabo recusandae distinctio doloremque quo cumque quam repudiandae consectetur dolor. Corporis vel porro, ipsam et provident molestiae harum temporibus perferendis, recusandae tenetur omnis odio deserunt maiores consequatur saepe, eaque dolorem.</p>
        </div>
    </div>
    <div class="bottomCenter">

        <div class="bottomLeftCenter">
            <h3>Email</h3>
            <span>&#9993; needtoshop@gamil.com</span>
        </div>
        <div class="bottomMidCenter">
            <h1>Get in touch anytime</h1>
        </div>
        <div class="bottomRightCenter">
            <h3>Address</h3>
            <span>&#8982; Kolkata,India</span>
        </div>
    </div>
    <?php include 'partials/_footer.php'; ?>
</body>
</html>