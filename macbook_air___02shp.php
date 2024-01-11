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
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body> 
	<?php include 'db_connect.php'; ?>

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
            <img class="rectangle" src="img/rectangle-7.png" />
            <img class="img" src="img/rectangle-8.svg" />
            <div class="text-wrapper-2">FOREVER BEAUTIFUL BY FATIMA</div>
          </div>
          <?php
$sql = "SELECT product_name FROM abc WHERE id = 1"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<div class="text-wrapper">' . $row['product_name'] . '</div>';
} else {
    echo "0 results";
}
?>

        </div>
        <div class="text-wrapper-4">SHOP</div>
        <img class="rectangle-2" src="img/rectangle-75.png" />
        <img class="rectangle-3" src="img/rectangle-76.png" />
        <img class="rectangle-4" src="img/rectangle-77.png" />
        <img class="rectangle-5" src="img/rectangle-78.png" />
        <img class="rectangle-6" src="img/rectangle-79.png" />
        <img class="rectangle-7" src="img/rectangle-80.png" />
        <img class="rectangle-8" src="img/rectangle-81.png" />
        <img class="rectangle-9" src="img/rectangle-82.png" />
        <div class="FOREVER-BEAUTIFUL-wrapper">
          <div class="FOREVER-BEAUTIFUL">FOREVER <br />BEAUTIFUL</div>
        </div>
        <div class="group-2">
          <div class="text-wrapper-5">FOREVER BEAUTIFUL MATTE GLOSS</div>
          <div class="text-wrapper-6">$18.99</div>
          <div class="group-3">
            <img class="fi-ss-star" src="img/fi-ss-star-5.svg" />
            <div class="text-wrapper-7">4.0</div>
          </div>
          <img class="line" src="img/line-5-2.svg" />
        </div>
        <div class="group-4">
          <div class="text-wrapper-8">FOREVER BEAUTIFUL&nbsp;&nbsp;LIPSTICKS</div>
          <div class="text-wrapper-9">$38.99</div>
          <div class="group-5">
            <img class="fi-ss-star-2" src="img/fi-ss-star-8.svg" />
            <div class="text-wrapper-10">4.8</div>
          </div>
          <img class="line-2" src="img/line-5-7.svg" />
        </div>
        <div class="group-6">
          <p class="text-wrapper-8">FOREVER BEAUTIFUL 2 COLOR BLUSH</p>
          <div class="text-wrapper-11">$28.99</div>
          <div class="group-7">
            <img class="fi-ss-star-2" src="img/fi-ss-star-6.svg" />
            <div class="text-wrapper-10">5.0</div>
          </div>
          <img class="line-3" src="img/line-5-4.svg" />
        </div>
        <div class="group-8">
          <div class="text-wrapper-8">FOREVER BEAUTIFUL&nbsp;&nbsp;EYE SHADOW PALETTE</div>
          <div class="text-wrapper-12">$38.99</div>
          <div class="group-9">
            <img class="fi-ss-star-2" src="img/fi-ss-star-9.svg" />
            <div class="text-wrapper-10">4.1</div>
          </div>
          <img class="line-4" src="img/line-5-5.svg" />
        </div>
        <div class="group-10">
          <p class="text-wrapper-8">FOREVER BEAUTIFUL EYE BROW PEN</p>
          <div class="text-wrapper-13">$28.99</div>
          <div class="group-11">
            <img class="fi-ss-star-2" src="img/fi-ss-star-7.svg" />
            <div class="text-wrapper-10">4.0</div>
          </div>
          <img class="line-5" src="img/line-5-8.svg" />
        </div>
        <div class="group-12">
          <div class="text-wrapper-8">FOREVER BEAUTIFUL SILK FOUNDATION</div>
          <div class="text-wrapper-14">$32.99</div>
          <div class="group-13">
            <img class="fi-ss-star-2" src="img/fi-ss-star-4.svg" />
            <div class="text-wrapper-10">5.0</div>
          </div>
          <img class="line-6" src="img/image.svg" />
        </div>
        <div class="group-14">
          <div class="text-wrapper-8">FOREVER BEAUTIFUL&nbsp;&nbsp;SHIMMERS</div>
          <div class="text-wrapper-15">$28.99</div>
          <div class="group-15">
            <img class="fi-ss-star-2" src="img/fi-ss-star-3.svg" />
            <div class="text-wrapper-10">3.9</div>
          </div>
          <img class="line-7" src="img/line-5-3.svg" />
        </div>
        <div class="group-16">
          <div class="text-wrapper-16">FOREVER BEAUTIFUL NUDE PALETTE</div>
          <div class="text-wrapper-17">$29.99</div>
          <div class="group-17">
            <img class="fi-ss-star-3" src="img/fi-ss-star.svg" />
            <div class="text-wrapper-18">4.0</div>
          </div>
          <img class="line-8" src="img/line-5-6.svg" />
        </div>
        <div class="group-18">
          <div class="text-wrapper-8">FOREVER BEAUTIFUL PRIMER</div>
          <div class="text-wrapper-19">$35.99</div>
          <div class="group-19">
            <img class="fi-ss-star-2" src="img/fi-ss-star-2.svg" />
            <div class="text-wrapper-10">5.0</div>
          </div>
          <img class="line-9" src="img/line-5.svg" />
        </div>
        <div class="div-wrapper"><div class="text-wrapper-20">MORE</div></div>
        <div class="overlap-3">
          <div class="FOREVER-BEAUTIFUL-2">FOREVER<br />BEAUTIFUL</div>
          <div class="group-20">
            <div class="text-wrapper-21">SHOP</div>
            <div class="text-wrapper-22">Products</div>
            <div class="text-wrapper-23">Overview</div>
            <div class="text-wrapper-24">Pricing</div>
            <div class="text-wrapper-25">Releases</div>
          </div>
          <div class="group-21">
            <div class="company">COMPANY</div>
            <div class="about-us">About Us</div>
            <div class="text-wrapper-26">Contact</div>
            <div class="text-wrapper-27">News</div>
            <div class="text-wrapper-28">Support</div>
          </div>
          <div class="group-22">
            <div class="overlap-4">
              <div class="text-wrapper-29">Enter your email</div>
              <div class="rectangle-10"></div>
              <div class="rectangle-11"></div>
              <div class="submit">SUBMIT</div>
            </div>
            <div class="stay-up-to-date">STAY UP TO DATE</div>
          </div>
          <img class="line-10" src="img/line-7.svg" />
          <div class="text-wrapper-30">Terms</div>
          <div class="text-wrapper-31">Privacy</div>
          <div class="text-wrapper-32">Cookies</div>
          <div class="text-wrapper-33">Social Media</div>
          <img class="facebook" src="img/facebook.svg" />
          <img class="twitter" src="img/twitter.svg" />
          <img class="instagram" src="img/instagram.svg" />
        </div>
      </div>
    </div>

	// Close the connection
    $conn->close();
    ?>




  </body>
</html>

