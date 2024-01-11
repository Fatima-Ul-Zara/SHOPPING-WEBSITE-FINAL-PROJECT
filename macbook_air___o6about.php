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
 
 // Fetch About Us content from the database
 $sql = "SELECT about_us_content FROM about_us_table WHERE id = 1";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
	 $row = $result->fetch_assoc();
	 $aboutUsContent = $row['about_us_content'];
 } else {
	 $aboutUsContent = "About Us content not available.";
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
<div id="about_us_ek1" >
	ABOUT US
</div>
<div id="text" >
	

</div>
<div id="text_ek1" >
	

</div>
<div id="welcome_to_forever_beautiful__where_we_believe_that_beauty_is_timeless_" >
	Welcome to Forever Beautiful, where we believe that beauty is timeless.

</div>
<div id="our_makeup_brand_is_dedicated_to_enhancing_your_natural_radiance__providing_high_quality_products_that_empower_you_to_feel_confident_and_glamorous_every_day_" >
	Our makeup brand is dedicated to enhancing your natural radiance, providing high-quality products that empower you to feel confident and glamorous every day.
</div>
<div id="embrace_the_beauty_that_lasts_with_forever_beautiful__where_every_product_is_crafted_to_make_you_look_and_feel_effortlessly_stunning_with_affordable_prices_" >
	Embrace the beauty that lasts with Forever Beautiful, where every product is crafted to make you look and feel effortlessly stunning with affordable prices.
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
	<div id="about_us_ek2" >
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
<div id="social_media" >
	Social Media
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

<div id="instagram"  >
	<div id="_bg__instagram_ek1"  ></div>

	<div id="group_ek4"  >
		<div id="_bg__group_ek5"  ></div>

		<div id="group_ek6"  >
			<div id="_bg__group_ek7"  ></div>
			<img src="skins/vector_ek2.png" id="vector_ek2" />

		</div>

	</div>

</div>

<div id="twitter_"  >
	<div id="_bg__twitter__ek1"  ></div>

	<div id="group_ek8"  >
		<div id="_bg__group_ek9"  ></div>

		<div id="group_ek10"  >
			<div id="_bg__group_ek11"  ></div>
			<img src="skins/vector_ek3.png" id="vector_ek3" />

		</div>

	</div>

</div>
<div id="terms" >
	Terms
</div>
<div id="privacy" >
	Privacy
</div>
<div id="cookies" >
	Cookies
</div>	
</body>
 </html>