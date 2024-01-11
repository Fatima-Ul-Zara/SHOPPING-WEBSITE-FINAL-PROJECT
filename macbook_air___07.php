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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database Connection
    include('db_connection.php'); 
    
    // Collect form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    
    // Insert data into the database
    $sql = "INSERT INTO contact_form (name, phone_number, email, comment) VALUES ('$name', '$phone_number', '$email', '$comment')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>

<div id="page_macbook_air___3_ek1"  >
	<div id="_bg__macbook_air___3_ek2"  ></div>

	<div id="landing_page"  >
		<div id="_bg__landing_page_ek1"  ></div>
		<div id="rectangle_25"  ></div>
		<div id="login" >
			Login
		</div>
		<div id="home" >
			Home
		</div>
		<div id="shop" >
			Shop
		</div>
		<div id="about_us" >
			ABOUT US
		</div>
		<div id="contact_us" >
			Contact US
		</div>

		<div id="group_1"  >
			<div id="_bg__group_1_ek1"  ></div>

			<div id="fi_rr_shopping_bag_add"  >
				<div id="_bg__fi_rr_shopping_bag_add_ek1"  ></div>
				<img src="skins/vector.png" id="vector" />

			</div>
			<div id="ellipse_1"  ></div>

		</div>
		<img src="skins/pexels_heitor_verdi_7665789_1.png" id="pexels_heitor_verdi_7665789_1" />
		<img src="skins/rectangle_7.png" id="rectangle_7" />
		<div id="forever_beautiful" >
			FOREVER BEAUTIFUL
		</div>
		<img src="skins/rectangle_8.png" id="rectangle_8" />
		<div id="forever_beautiful_by_fatima" >
			FOREVER BEAUTIFUL BY FATIMA
		</div>

	</div>
	<div id="contact_us_ek1" >
		CONTACT US
	</div>
	<div id="rectangle_70"  ></div>
	<div id="name" >
		NAME
	</div>
	<div id="rectangle_71"  ></div>
	<div id="phone_no_" >
		PHONE NO.
	</div>
	<div id="rectangle_72"  ></div>
	<div id="email__" >
		EMAIL *
	</div>
	<div id="rectangle_73"  ></div>
	<div id="comment" >
		COMMENT
	</div>
	<div id="rectangle_74"  ></div>
	<div id="send" >
		SEND
	</div>
	<div id="rectangle_23"  ></div>
	<div id="forever_beautiful_ek1" >
		FOREVER
BEAUTIFUL
	</div>

	<div id="group_45"  >
		<div id="_bg__group_45_ek1"  ></div>
		<div id="shop_ek1" >
			SHOP
		</div>
		<div id="products" >
			Products
		</div>
		<div id="overview" >
			Overview
		</div>
		<div id="pricing" >
			Pricing
		</div>
		<div id="releases" >
			Releases
		</div>

	</div>

	<div id="group_44"  >
		<div id="_bg__group_44_ek1"  ></div>
		<div id="company" >
			Company
		</div>
		<div id="about_us_ek1" >
			About us
		</div>
		<div id="contact" >
			Contact
		</div>
		<div id="news" >
			News
		</div>
		<div id="support" >
			Support
		</div>

	</div>

	<div id="group_46"  >
		<div id="_bg__group_46_ek1"  ></div>
		<div id="enter_your_email" >
			Enter your email
		</div>
		<div id="rectangle_32"  ></div>
		<div id="rectangle_33"  ></div>
		<div id="submit" >
			Submit
		</div>
		<div id="stay_up_to_date" >
			Stay up to date
		</div>

	</div>
	<img src="skins/line_7.png" id="line_7" />
	<div id="terms" >
		Terms
	</div>
	<div id="privacy" >
		Privacy
	</div>
	<div id="cookies" >
		Cookies
	</div>
	<div id="social_media" >
		Social Media
	</div>

	<div id="facebook"  >
		<div id="_bg__facebook_ek1"  ></div>

		<div id="group"  >
			<div id="_bg__group_ek1"  ></div>

			<div id="group_ek2"  >
				<div id="_bg__group_ek3"  ></div>
				<img src="skins/vector_ek1.png" id="vector_ek1" />

			</div>

		</div>

	</div>

	<div id="twitter_"  >
		<div id="_bg__twitter__ek1"  ></div>

		<div id="group_ek4"  >
			<div id="_bg__group_ek5"  ></div>

			<div id="group_ek6"  >
				<div id="_bg__group_ek7"  ></div>
				<img src="skins/vector_ek2.png" id="vector_ek2" />

			</div>

		</div>

	</div>

	<div id="instagram"  >
		<div id="_bg__instagram_ek1"  ></div>

		<div id="group_ek8"  >
			<div id="_bg__group_ek9"  ></div>

			<div id="group_ek10"  >
				<div id="_bg__group_ek11"  ></div>
				<img src="skins/vector_ek3.png" id="vector_ek3" />

			</div>

		</div>

	</div>

</div>
</body>
</html>