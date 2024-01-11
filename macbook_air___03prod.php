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
	<?php
include('db_connection.php');

// Fetch product data
$product_id = 1; // Assuming product ID is 1
$sql = "SELECT * FROM products WHERE id = $product_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $product_name = $row['product_name'];
    $price = $row['price'];
    
} else {
    echo "Product not found";
}

// Close database connection
$conn->close();
?>


    <div class="macbook-air">
      <div class="div">
        <img class="rectangle" src="img/rectangle-75.png" />
        <div class="text-wrapper">FOREVER BEAUTIFUL MATTE GLOSS</div>
		<div class="text-wrapper"><?php echo $product_name; ?></div>
        <div class="text-wrapper-2"><?php echo "$" . $price; ?></div>
        <div class="text-wrapper-2">$18.99</div>
        <div class="text-wrapper-3">PRICE:</div>
        <div class="text-wrapper-4">COLORS</div>
        <div class="overlap">
          <div class="rectangle-2"></div>
          <div class="text-wrapper-5">PINK</div>
        </div>
        <div class="overlap-group">
          <div class="rectangle-2"></div>
          <div class="text-wrapper-6">RED</div>
        </div>
        <div class="overlap-2">
          <div class="rectangle-3"></div>
          <div class="text-wrapper-6">PEACH</div>
        </div>
        <div class="text-wrapper-7">QUANTITY</div>
        <div class="overlap-3">
          <div class="rectangle-4"></div>
          <div class="text-wrapper-8">_</div>
          <div class="text-wrapper-9">+</div>
          <div class="text-wrapper-10">1</div>
        </div>
        <div class="div-wrapper"><div class="text-wrapper-11">ADD TO CART</div></div>
        <div class="overlap-4"><div class="text-wrapper-12">BUY IT NOW</div></div>
        <div class="overlap-5">
          <div class="FOREVER-BEAUTIFUL">FOREVER<br />BEAUTIFUL</div>
          <div class="group">
            <div class="text-wrapper-13">SHOP</div>
            <div class="text-wrapper-14">Products</div>
            <div class="text-wrapper-15">Overview</div>
            <div class="text-wrapper-16">Pricing</div>
            <div class="text-wrapper-17">Releases</div>
          </div>
          <div class="group-2">
            <div class="company">COMPANY</div>
            <div class="about-us">About Us</div>
            <div class="text-wrapper-18">Contact</div>
            <div class="text-wrapper-19">News</div>
            <div class="text-wrapper-20">Support</div>
          </div>
          <div class="group-3">
            <div class="overlap-group-2">
              <div class="text-wrapper-21">Enter your email</div>
              <div class="rectangle-5"></div>
              <div class="rectangle-6"></div>
              <div class="submit">SUBMIT</div>
            </div>
            <div class="stay-up-to-date">STAY UP TO DATE</div>
          </div>
          <img class="line" src="img/line-7.svg" />
          <div class="text-wrapper-22">Terms</div>
          <div class="text-wrapper-23">Privacy</div>
          <div class="text-wrapper-24">Cookies</div>
          <div class="text-wrapper-25">Social Media</div>
          <img class="facebook" src="img/facebook.svg" />
          <img class="twitter" src="img/twitter.svg" />
          <img class="instagram" src="img/instagram.svg" />
        </div>
      </div>
    </div>// Close the connection
    $conn->close();
    ?>

  </body>
</html>
