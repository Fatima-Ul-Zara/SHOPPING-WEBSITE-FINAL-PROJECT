<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forever beautiful";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 ?>
<?php
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle login form submission
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Successful login, redirect to home or dashboard
        header("Location: home.php");
        exit();
    } else {
        $error_message = "Invalid email or password";
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle registration form submission
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        // Registration successful, redirect to login page
        header("Location: login.php");
        exit();
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<!-- The rest of your HTML code -->
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="macbook-air">
      <div class="div">
        <div class="landing-page">
          <div class="overlap"><div class="login">LOGIN</div></div>
          <div class="home">HOME</div>
          <div class="shop">SHOP</div>
          <div class="text-wrapper">ABOUT US</div>
          <div class="contact-US">CONTACT US</div>
          <div class="group">
            <div class="overlap-group">
              <img class="fi-rr-shopping-bag" src="img/fi-rr-shopping-bag-add.svg" />
              <div class="ellipse"></div>
            </div>
          </div>
          <img class="pexels-heitor-verdi" src="img/pexels-heitor-verdi-7665789-1.png" />
          <div class="overlap-2">
            <img class="rectangle" src="img/rectangle-8.svg" />
            <div class="text-wrapper-2">FOREVER BEAUTIFUL BY FATIMA</div>
          </div>
          <div class="text-wrapper-3">FOREVER BEAUTIFUL</div>
        </div>
        <div class="text-wrapper-4">LOG IN</div>
        <div class="div-wrapper"><div class="text-wrapper-5">EMAIL</div></div>
        <div class="overlap-3"><div class="text-wrapper-5">PASSWORD</div></div>
        <div class="text-wrapper-6">FORGOT YOUR PASSWORD?</div>
        <div class="overlap-4"><div class="text-wrapper-7">SIGN IN</div></div>
        <div class="CREATE-ACCOUNT">CREATE&nbsp;&nbsp;ACCOUNT</div>
        <div class="overlap-5">
          <div class="FOREVER-BEAUTIFUL">FOREVER<br />BEAUTIFUL</div>
          <div class="group-2">
            <div class="text-wrapper-8">SHOP</div>
            <div class="text-wrapper-9">Products</div>
            <div class="text-wrapper-10">Overview</div>
            <div class="text-wrapper-11">Pricing</div>
            <div class="text-wrapper-12">Releases</div>
          </div>
          <div class="group-3">
            <div class="company">COMPANY</div>
            <div class="about-us">About Us</div>
            <div class="text-wrapper-13">Contact</div>
            <div class="text-wrapper-14">News</div>
            <div class="text-wrapper-15">Support</div>
          </div>
          <div class="group-4">
            <div class="overlap-6">
              <div class="text-wrapper-16">Enter your email</div>
              <div class="rectangle-2"></div>
              <div class="rectangle-3"></div>
              <div class="submit">SUBMIT</div>
            </div>
            <div class="stay-up-to-date">STAY UP TO DATE</div>
          </div>
          <div class="text-wrapper-17">Social Media</div>
          <img class="facebook" src="img/facebook.svg" />
          <img class="twitter" src="img/twitter.svg" />
          <img class="instagram" src="img/instagram.svg" />
          <div class="text-wrapper-18">Terms</div>
          <div class="text-wrapper-19">Privacy</div>
          <div class="text-wrapper-20">Cookies</div>
          <img class="line" src="img/line-7.svg" />
        </div>
      </div>
    </div>
  </body>
</html>

