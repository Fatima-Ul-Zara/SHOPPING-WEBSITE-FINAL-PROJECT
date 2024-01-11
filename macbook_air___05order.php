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
    // Retrieve form data
    $email = $_POST['email'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $shippingMethod = $_POST['shipping_method'];
    $paymentMethod = $_POST['payment_method'];
    $mobileNumber = $_POST['mobile_number'];

   
    $sql = "INSERT INTO orders (email, country, address, first_name, last_name, shipping_method, payment_method, mobile_number) VALUES ('$email', '$country', '$address', '$firstName', '$lastName', '$shippingMethod', '$paymentMethod', '$mobileNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

		<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
      <div class="div"><form action="process_order.php" method="post">
    
<div class="macbook-air">
        <div class="text-wrapper">Contact</div>
        <div class="text-wrapper-2">ORDER</div>
        <div class="overlap"><p class="p">Email or Mobile phone number</p></div>
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="text-wrapper-3">Country</div>
          <div class="text-wrapper-4">Delivery</div>
        </div>
        <div class="div-wrapper"><div class="text-wrapper-5">Address</div></div>
        <div class="overlap-2"><div class="text-wrapper-6">First Name</div></div>
        <div class="overlap-3"><div class="text-wrapper-7">Last Name</div></div>
        <div class="text-wrapper-8">Shipping method</div>
        <div class="overlap-4">
          <div class="text-wrapper-9">$5.00</div>
          <p class="text-wrapper-10">Standard (3 to 6 working days)</p>
        </div>
        <div class="text-wrapper-11">Payment</div>
        <div class="overlap-5"><div class="text-wrapper-12">Cash On Delivery</div></div>
        <div class="overlap-6"><p class="text-wrapper-13">Mobile phone number for orders and delivery</p></div>
        <div class="overlap-7"><div class="text-wrapper-14">Complete Order</div></div>
      </div>
    </div><input type="submit" value="Complete Order">
</form>
</div>
  </body>
  </html>