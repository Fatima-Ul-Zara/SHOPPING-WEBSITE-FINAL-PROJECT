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

    <div class="fashion-website">
      <div class="div">
        <div class="overlap">
          <div class="group">
            <div class="overlap-group">
              <div class="text-wrapper">Enter your email</div>
              <div class="rectangle"></div>
              <div class="rectangle-2"></div>
              <div class="submit">SUBMIT</div>
            </div>
            <div class="text-wrapper-2">STAY UP TO DATE</div>
          </div>
          <div class="text-wrapper-3">Social Media</div>
          <div class="group-2">
            <div class="text-wrapper-2">SHOP</div>
            <div class="text-wrapper-4">Products</div>
            <div class="text-wrapper-5">Overview</div>
            <div class="text-wrapper-6">Pricing</div>
            <div class="text-wrapper-7">Releases</div>
          </div>
          <img class="facebook" src="img/facebook.svg" />
          <div class="group-3">
            <div class="text-wrapper-2">COMPANY</div>
            <div class="text-wrapper-4">About Us</div>
            <div class="text-wrapper-5">Contact</div>
            <div class="text-wrapper-6">News</div>
            <div class="text-wrapper-7">Support</div>
          </div>
          <div class="text-wrapper-8">Terms</div>
          <div class="text-wrapper-9">Privacy</div>
          <div class="text-wrapper-10">Cookies</div>
          <div class="text-wrapper-11">SALE</div>
          <img class="line" src="img/line-7.svg" />
          <img class="twitter" src="img/twitter.svg" />
          <img class="instagram" src="img/instagram.svg" />
          <div class="FOREVER-BEAUTIFUL">FOREVER<br />BEAUTIFUL</div>
        </div>
        <div class="text-wrapper-12">Feedback Corner</div>
        <div class="overlap-group-wrapper">
          <div class="overlap-group-2">
            <div class="overlap-2">
              <div class="text-wrapper-13">Sarah Thompson</div>
              <div class="text-wrapper-14">“</div>
            </div>
            <p class="p">
              I absolutely love the quality and quantity of the makeup products I purchased from this website. customer
              service was outstanding, and I received my order quickly. Highly recommended!
            </p>
          </div>
        </div>
        <div class="overlap-wrapper">
          <div class="overlap-3">
            <div class="overlap-group-3">
              <div class="text-wrapper-13">Emily Wilson</div>
              <div class="text-wrapper-14">“</div>
            </div>
            <p class="the-customer">
              The customer experience was exceptional from start to finish. The website is user-friendly, the checkout
              process was smooth, and the makeup I ordered is perfect I&#39;m beyond satisfied!
            </p>
          </div>
        </div>
        <div class="div-wrapper">
          <div class="overlap-3">
            <div class="text-wrapper-15">Olivia Martinez</div>
            <div class="text-wrapper-16">“</div>
            <p class="text-wrapper-17">
              I had a great experience shopping on this website. The lipsticks I bought are of creamy texture and long
              lasting. Highly satisfied!
            </p>
          </div>
        </div>
        <div class="overlap-4">
          <img class="img" src="img/group-9.png" /> <img class="group-4" src="img/group-8.png" />
        </div>
        <div class="text-wrapper-18">Best selling</div>
        <p class="text-wrapper-19">Get in on the trend with our curated selection of best-selling styles.</p>
        <div class="frame">
          <div class="group-5">
            <div class="text-wrapper-20">See all</div>
            <img class="line-2" src="img/line-2.svg" />
          </div>
        </div>
        <div class="group-6">
          <div class="text-wrapper-21">FOREVER BEAUTIFUL FOUNDATION</div>
          <div class="text-wrapper-22">$38.99</div>
          <div class="group-7">
            <img class="fi-ss-star" src="img/fi-ss-star-2.svg" />
            <div class="text-wrapper-23">5.0</div>
          </div>
          <img class="line-3" src="img/line-5-3.svg" />
        </div>
        <div class="group-8">
          <div class="text-wrapper-21">FOREVER BEAUTIFUL CONCEALER</div>
          <div class="text-wrapper-24">$22.99</div>
          <div class="group-9">
            <img class="fi-ss-star" src="img/fi-ss-star-13.svg" />
            <div class="text-wrapper-23">4.9</div>
          </div>
          <img class="line-4" src="img/line-6-8.svg" />
        </div>
        <div class="group-10">
          <div class="text-wrapper-21">FOREVER BEAUTIFUL MINI LIPSTICK</div>
          <div class="text-wrapper-22">$19.99</div>
          <div class="group-11">
            <img class="fi-ss-star" src="img/fi-ss-star-12.svg" />
            <div class="text-wrapper-23">5.0</div>
          </div>
          <img class="line-5" src="img/line-6-2.svg" />
        </div>
        <div class="overlap-5">
          <div class="rectangle-3"></div>
          <img class="pexels-dima-valkov" src="img/pexels-dima-valkov-6211621-1.png" />
        </div>
        <img class="rectangle-4" src="img/rectangle-50.png" />
        <div class="overlap-6">
          <div class="rectangle-5"></div>
          <img class="mask-group" src="img/image.png" />
          <img class="pexels-dima-valkov" src="img/pexels-dima-valkov-6503007-3.png" />
        </div>
        <div class="overlap-7">
          <div class="rectangle-6"></div>
          <img class="mask-group-2" src="img/mask-group.png" />
          <img class="img-2" src="img/pexels-monstera-6311612-3.png" />
        </div>
        <div class="text-wrapper-25">Our products</div>
        <div class="sale">SALE</div>
        <div class="overlap-8">
          <div class="text-wrapper-20">HOT</div>
          <img class="line-6" src="img/line-1.svg" />
        </div>
        <div class="new-arrivals">NEW ARRIVALS</div>
        <div class="overlap-9">
          <div class="overlap-10">
            <div class="rectangle-7"></div>
            <div class="group-12">
              <div class="text-wrapper-21">FOREVER BEAUTIFUL MASCARA</div>
              <div class="text-wrapper-26">$19.00</div>
              <div class="group-13">
                <img class="fi-ss-star" src="img/fi-ss-star-10.svg" />
                <div class="text-wrapper-23">4.9</div>
              </div>
              <img class="line-7" src="img/line-6-4.svg" />
            </div>
            <img class="pexels-dima-valkov-2" src="img/pexels-dima-valkov-6402848-1.png" />
            <div class="rectangle-8"></div>
            <img class="pexels-heitor-verdi" src="img/pexels-heitor-verdi-7665789-2.png" />
            <div class="frame-2">
              <div class="overlap-11">
                <img class="pexels-dima-valkov-3" src="img/pexels-dima-valkov-6511777-1.png" />
                <img class="image" src="img/image-1.png" />
              </div>
            </div>
          </div>
          <div class="group-14">
            <div class="text-wrapper-21">FOREVER BEAUTIFUL BLUSHER</div>
            <div class="text-wrapper-27">$18.99</div>
            <div class="group-15">
              <img class="fi-ss-star" src="img/fi-ss-star.svg" />
              <div class="text-wrapper-23">5.0</div>
            </div>
            <img class="line-8" src="img/line-5-4.svg" />
          </div>
          <div class="group-16">
            <div class="text-wrapper-21">FB EYESHADOW PALETTE</div>
            <div class="text-wrapper-28">$32.99</div>
            <div class="group-17">
              <img class="fi-ss-star" src="img/fi-ss-star-4.svg" />
              <div class="text-wrapper-23">4.8</div>
            </div>
            <img class="line-9" src="img/line-6-5.svg" />
          </div>
        </div>
        <div class="overlap-12">
          <div class="rectangle-9"></div>
          <img class="img-2" src="img/pexels-dima-valkov-6211614-1.png" />
        </div>
        <div class="overlap-13">
          <div class="rectangle-9"></div>
          <img class="img-2" src="img/pexels-dima-valkov-6402846-1.png" />
        </div>
        <div class="overlap-14">
          <div class="rectangle-9"></div>
          <img class="img-2" src="img/pexels-dima-valkov-6211601-1.png" />
        </div>
        <div class="overlap-15">
          <div class="rectangle-9"></div>
          <img class="img-2" src="img/pexels-monstera-6311613-1-1.png" />
        </div>
        <div class="group-18">
          <div class="text-wrapper-21">FB 8 COLOR EYESHADOW</div>
          <div class="text-wrapper-29">$39.99</div>
          <div class="group-19">
            <img class="fi-ss-star" src="img/fi-ss-star-6.svg" />
            <div class="text-wrapper-23">5.0</div>
          </div>
          <img class="line-10" src="img/line-5-6.svg" />
        </div>
        <div class="group-20">
          <p class="text-wrapper-21">FOREVER BEAUTIFUL 8 BRUSHES SET</p>
          <div class="text-wrapper-30">$39.95</div>
          <div class="group-21">
            <img class="fi-ss-star" src="img/fi-ss-star-7.svg" />
            <div class="text-wrapper-23">4.7</div>
          </div>
          <img class="line-11" src="img/line-6-7.svg" />
        </div>
        <div class="group-22">
          <div class="text-wrapper-21">FOREVER BEAUTIFUL SERUM</div>
          <div class="text-wrapper-31">$46.00</div>
          <div class="group-23">
            <img class="fi-ss-star" src="img/fi-ss-star-11.svg" />
            <div class="text-wrapper-23">4.9</div>
          </div>
          <img class="line-12" src="img/line-6-3.svg" />
        </div>
        <div class="group-24">
          <div class="text-wrapper-21">FOREVER BEAUTIFUL LINER</div>
          <div class="text-wrapper-32">$22.99</div>
          <div class="group-25">
            <img class="fi-ss-star" src="img/fi-ss-star-3.svg" />
            <div class="text-wrapper-23">4.7</div>
          </div>
          <img class="line-13" src="img/line-6.svg" />
        </div>
        <div class="group-26">
          <div class="text-wrapper-21">FOREVER BEAUTIFUL CONTOUR</div>
          <div class="text-wrapper-26">$36.00</div>
          <div class="group-27">
            <img class="fi-ss-star" src="img/fi-ss-star-5.svg" />
            <div class="text-wrapper-23">5.0</div>
          </div>
          <img class="line-14" src="img/line-6-6.svg" />
        </div>
        <div class="overlap-16"></div>
        <div class="text-wrapper-33">SALE ITEMS FOR YOU</div>
        <div class="elegant-woman-straw-wrapper">
          <img class="elegant-woman-straw" src="img/elegant-woman-straw-hat-isolated-2.png" />
        </div>
        <div class="overlap-17">
          <div class="rectangle-10"></div>
          <img class="pexels-dima-valkov-4" src="img/pexels-dima-valkov-6211617-1.png" />
        </div>
        <div class="text-wrapper-34">GOLD HIGHLIGHTER</div>
        <div class="text-wrapper-35">COMPACT POWDER</div>
        <div class="landing-page">
          <div class="login-wrapper"><div class="login">LOGIN</div></div>
          <div class="home">HOME</div>
          <div class="shop">SHOP</div>
          <div class="text-wrapper-36">ABOUT US</div>
          <div class="contact-US">CONTACT US</div>
          <div class="group-28">
            <div class="overlap-group-4">
              <img class="fi-rr-shopping-bag" src="img/fi-rr-shopping-bag-add.svg" />
              <div class="ellipse"></div>
            </div>
          </div>
          <img class="pexels-heitor-verdi-2" src="img/pexels-heitor-verdi-7665789-1.png" />
          <div class="overlap-18">
            <img class="rectangle-11" src="img/rectangle-8.svg" />
            <div class="text-wrapper-37">FOREVER BEAUTIFUL BY FATIMA</div>
          </div>
          <div class="text-wrapper-38">FOREVER BEAUTIFUL</div>
        </div>
        <div class="text-wrapper-39">TOH</div>
        <div class="text-wrapper-40">NEW ARRIVALS</div>
        <div class="text-wrapper-41">SALE</div>
        <div class="group-29">
          <div class="overlap-19">
            <div class="rectangle-12"></div>
            <img class="group-30" src="img/group-37.png" />
            <img
              class="excited-white-girl"
              src="img/excited-white-girl-bright-stylish-glasses-posing-pink-dreamy-curly-woman-playing-with-her-ginger-hair-laughing-1.png"
            />
          </div>
          <div class="group-31">
            <div class="text-wrapper-42">Exclusive offer</div>
            <p class="text-wrapper-43">
              Unlock the ultimate style upgrade with our exclusive offer Enjoy savings of up to 40% off on our latest
              New Arrivals
            </p>
            <div class="group-32">
              <div class="overlap-group-5">
                <div class="text-wrapper-44">Days</div>
                <div class="text-wrapper-45">06</div>
              </div>
            </div>
            <div class="group-33">
              <div class="overlap-group-5">
                <div class="text-wrapper-46">18</div>
                <div class="text-wrapper-47">Hours</div>
              </div>
            </div>
            <div class="group-34">
              <div class="overlap-group-5">
                <div class="text-wrapper-48">48</div>
                <div class="text-wrapper-49">Min</div>
              </div>
            </div>
            <div class="group-35">
              <div class="overlap-20"><div class="text-wrapper-50">BUY NOW</div></div>
            </div>
          </div>
        </div>
        <div class="MATTE-LIPSTICK">MATTE&nbsp;&nbsp;LIPSTICK</div>
        <div class="group-36">
          <div class="text-wrapper-51">$20.99</div>
          <div class="text-wrapper-52">$29.99</div>
          <div class="group-37">
            <img class="fi-ss-star" src="img/fi-ss-star-9.svg" />
            <div class="text-wrapper-23">5.0</div>
          </div>
          <img class="line-15" src="img/line-5-5.svg" />
        </div>
        <div class="group-38">
          <div class="text-wrapper-53">$15.99</div>
          <div class="text-wrapper-52">$22.99</div>
          <div class="group-37">
            <img class="fi-ss-star" src="img/image.svg" />
            <div class="text-wrapper-23">4.2</div>
          </div>
          <img class="line-15" src="img/line-5-2.svg" />
        </div>
        <div class="group-39">
          <div class="text-wrapper-54">$25.99</div>
          <div class="text-wrapper-52">$30.99</div>
          <div class="group-40">
            <img class="fi-ss-star" src="img/fi-ss-star-8.svg" />
            <div class="text-wrapper-23">4.8</div>
          </div>
          <img class="line-16" src="img/line-5.svg" />
        </div>
      </div>
    </div>
  
<?php
    // query
    $sql = "SELECT * FROM xyz";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    // Close the connection
    $conn->close();
    ?>
</body>
</html>