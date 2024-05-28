<?php
// code 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    
    $cpass = $_POST['cpass'];
    
    
    //db
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "formhk";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    echo "ho gya bhai";

} 
else {
    $sql = "INSERT INTO `detail_form` (`name`, `user_name`, `email`, `phone`, `pass`, `cpass`, `date`) VALUES ('$name','$user_name','$email','$phone','$pass','$cpass', current_timestamp());";
    $result = mysqli_query($conn ,$sql);
    
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addmission Form </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
      <div class="title">Registration Page</div>
      <form action="/form/index.php" method="post">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Full Name </span>
                <input type="text" name="name" placeholder="Enter your Name " required>
            </div>
            <div class="input-box">
                <span class="details"> Username </span>
                <input type="text" name="user_name" placeholder="Enter your username " required>
            </div>
            <div class="input-box">
                <span class="details"> Email </span>
                <input type="email" name="email" placeholder="Enter your Email " required>
            </div>
            <div class="input-box">
                <span class="details"> Phone  </span>
                <input type="number" name="phone" placeholder="Enter your Number " required>
            </div>
            <div class="input-box">
                <span class="details"> Passwrod </span>
                <input type="password" name="pass" placeholder="Enter your Name " required>
            </div>
            <div class="input-box">
                <span class="details"> Confirm Passwrod </span>
                <input type="password" name="cpass" placeholder="Confirm your password" required>
            </div>
        </div>
        <!-- <div class="gender-details">
            <span class="gender-title">Gender</span>
            <div class="category">
                <label for="">
                    <span class="dot one"></span>
                    <span class="gender">Male</span>
                </label>
                <label for="">
                    <span class="dot one"></span>
                    <span class="gender">Female</span>
                </label>
                <label for="">
                    <span class="dot one"></span>
                    <span class="gender">Non-binary person</span>
                </label>
            </div>
        </div> -->
        <div class="btn"><input type="submit" value="Registration"></div>
      </form>
    </div>
</body>
</html>