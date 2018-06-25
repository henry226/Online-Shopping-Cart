<?php   
session_start();  
$servername = "localhost";
$username = "root";
$password = "";
$database = "cs602";

// Create connection
$connect = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 
?>  

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chin-Shen / Wofoil</title>
<link href="css/parallax.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>
</head>

<body style="background-color: #e6e6e6;">
<div class="container-fluid">
  <!-- Header here -->
  <div class="row animate" style="margin-top: 23px; text-align: center; margin-bottom: 17px">
    <div class="col-md-12">
      <p style="font-size:35px;"><img src="images/cswofoil_logo.png" alt="Company Logo"/> Chin-Shen / Wofoil Enterprise Co., Ltd</p>
    </div>
  </div>

  <!-- Slide show here -->
  <div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active">1</li>
        <li data-target="#myCarousel" data-slide-to="1">2</li>
        <li data-target="#myCarousel" data-slide-to="2">3</li>
      </ol>

      <!-- Slide Pictures -->
      <div class="carousel-inner">
        <div class="item active"> 
			    <img src="images/Carousel_Placeholder_wynns.png" alt="First Slide" style="width:100%; max-height:650px">
		    </div>

        <div class="item"> 
			    <img src="images/Carousel_Placeholder_wofoil2.png" alt="second Slide" style="width:100%; max-height:650px">
		    </div>
        <div class="item"> 
          <img src="images/Carousel_Placeholder_wofoil.png" alt="Third Slide" style="width:100%; max-height:650px"> </div>
        </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a> </div>
  </div>

  <!-- Nav Bar here -->
  <div class="row">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="index.php">Home Page</a> </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="./products/home.php">Products</a></li>
            <li><a href="#location">Locations</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="./review.php">Reviews</a></li>
          </ul>

          <!-- switch between login and logout -->
          <ul class="nav navbar-nav navbar-right">
            <?php 
              if(isset($_SESSION["login"]) && isset($_SESSION["email"])){
                if($_SESSION["login"] == true){
                  echo "<li><a href='#'>". $_SESSION["email"]. "</a></li>";
                  echo '<li><a href="./clearSession.php"><span class="glyphicon glyphicon-log-out"></span>Log out</a></li>';
                }
              }
              else 
              echo '<li><a href="./login/index.php"><span class="glyphicon glyphicon-log-in"></span> Log in </a></li>';
            ?>
          </ul>
          <!-- End switch between login and logout -->

          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" name="search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
  <!-- Nav stops here -->

<!-- Introdcution about companies -->
<div class="row animate">
  <div class="col-md-12">
    <h1 style="text-align: center">Chin-Shen Enterprise Co., Ltd.</h1>
    <hr style="height: 2px; background-color: dimgray; width: 460px;">
    <p>Chin Shen Co., Ltd. set up in 1972, has 42 years. To engage in industrial lubricants, chemicals, chemical solvents, detergents trade as the main marketing channels. The introduction of the world's leading brands of special chemicals for domestic use of various industries. Jin-sheng enterprises always uphold the "social responsibility for environmental protection," the corporate social responsibility, in response to the trend of the times continue to represent new products in line with the government's environmental regulations and policies. Jin Sheng Enterprise Company main business products include: automatic lubrication system, industrial lubricants, industrial coatings, filter filters, chemicals, industrial detergents, industrial solvents so far the customer base throughout the well-known high-tech electronics industry, Petrochemical industry, quarrying and mining, aerospace industry, steel industry, water treatment industry, power generation industry and other traditional industries. </p>
  </div>

  <div class="col-md-12">
    <h1 style="text-align: center">Wofoil Enterprise Co., Ltd.</h1>
    <hr style="height: 2px; background-color: dimgray; width: 400px;">
    <p>Wofoil Enterprise CO., LTD was established in 1988. At first, the well-known car dealership was well known to the world's leading distributor of well-known European and American racing-grade oil and its steam / diesel additives. In recent years, the sales office of Weifeng Company has deepened its business to the agency and sales of oil maintenance products and maintenance products for the 10 major Wynn's specialty automobiles. It has also commissioned and cooperated with Kuttenkeuler Technology Co., Ltd., the German well-known oil company ENI Group, to develop high quality High specifications WOFOiL European series of automotive lubricants. At the same time, in order to meet the demand of well-known car manufacturers and professional auto repair and maintenance chain factories in China, the Company also provides customized high-quality oil products services.</p>
  </div>
</div>
<!-- End introdcution about companies -->

<!-- Parallax image -->
<div class="row" style="margin-top: 20px;">
  <div class="parallax-window" data-parallax="scroll" data-z-index="1" data-image-src="images/banner-2.jpg"></div>
</div>
<!-- Parallax image -->

  <!-- Core Products 1 here -->
  <a name="product"></a>

  <div class="row" style="text-align: center">
    <div class="col-xs-12 animate">
      <h1>Core Products: </h1>
      <hr style="height: 2px; background-color: dimgray; width: 230px;">
      <p>Automatic Lubricating Cups / Systems, Industrial Lubricants, Industrial Coatings, Filter Filters, Chemicals, Industrial Cleaning Agents, Industrial Solvents.</p>
    </div>
  </div>
  <div class="row" style="margin-top: 20px">

    <div class="col-md-2 col-sm-6 core1" style="padding: 0;">
      <figure>
       <img alt="wofoil engine oil" src="images/templatemo_image_perma_400x350.png" style="width: 100%; max-height: 300px">
        <figcaption class= "picBox" style="background-color: #B10021;">Germany PERMA</figcaption>
      </figure>
    </div>
    <div class="col-md-2 col-sm-6 core2" style="padding: 0;">
      <figure>
		<img alt="wofoil engine oil" src="images/templatemo_image_whitmore_400x350.png" style="width: 100%; max-height: 300px">
		<figcaption class= "picBox" style="background-color: black;">USA WHITMORE</figcaption>
      </figure>
    </div>
    <div class="col-md-2 col-sm-6 core1" style="padding: 0;">
      <figure>
       <img alt="wofoil engine oil" src="images/templatemo_image_airsentry_400x350.png" style="width: 100%; max-height: 300px">
        <figcaption class= "picBox" style="background-color: #CB7200;">USA AIRSENTRY</figcaption>
      </figure>
    </div>

    <!-- Core 2 here -->
    <div class="col-md-2 col-sm-6 core2" style="padding: 0;">
      <figure>
       <img alt="wofoil engine oil" src="images/templatemo_image_kats_400x350.png" style="width: 100%; max-height: 300px">
        <figcaption class= "picBox" style="background-color: #337ab7;">USA KATS</figcaption>
      </figure>
    </div>
    <div class="col-md-2 col-sm-6 core1" style="padding: 0;">
      <figure>
       <img alt="wofoil engine oil" src="images/templatemo_image_ensolv_400x350.png" style="width: 100%; max-height: 300px">
        <figcaption class= "picBox" style="background-color: forestgreen;">ENSOLV</figcaption>
      </figure>
    </div>
    <div class="col-md-2 col-sm-6 core2" style="padding: 0;">
      <figure>
       	<img alt="wofoil engine oil" src="images/templatemo_image_henkel_400x350.png" style="width: 100%; max-height: 300px">
        <figcaption class= "picBox" style="background-color: red;">HENKEL</figcaption>
      </figure>
    </div>
  </div>

  <!-- Information Area -->
  <a name="contact"></a>

  <div class="row">
    <!-- Message Area -->
    <div class="col-md-12">
      <h1 style="text-align: center">Please Leave Your Message Here:</h1>
      <hr style="height: 2px; background-color: dimgray; width: 500px;">
    </div>
    <!-- End message area -->

  <!--  -->
  <div class="col-md-12">
    <form action="./review.php" method="post" id="contact_form" role="form">
    <div class="row">
      <div class="col-md-5">
        <div class="form-group ">
          <p><span class="glyphicon glyphicon-user"></span> Name</p>
            <input name="user_name" type="text" class="form-control" id="input_name" placeholder="Enter Your Name..." onkeyup="Suggestions(this.value)">
        </div>

        <div class="form-group">
          <p><span class="glyphicon glyphicon-envelope"></span> Email</p>
          <input name="user_email" type="email" class="form-control" id="input_email" placeholder="Enter Your Email...">
        </div>

        <div class="form-group">
          <p><span class="glyphicon glyphicon-earphone"></span> Phone</p>
          <input name="user_phone" type="number" class="form-control" id="input_tel" placeholder="Please Enter 9 digits..." onchange="limitNum(this)">
        </div>
  </div>

  <div class="col-md-7">
    <div class="form-group">
      <p><span class="glyphicon glyphicon-comment"></span> Message</p>
      <textarea name="user_message" rows="9" class="form-control" id="wordCount" placeholder="No more than 10 words."></textarea>
      <p>Total word Count : <span id="counter">0</span></p>
    <br>
      <button type="submit" class="btn btn-primary">Send</button>
      <button type="reset" class="btn btn-default right">Reset</button>
    </div>
  </div>
</div>
  <!-- row -->
  </form>
  </div>
      
    <a name="location"></a>
    
    <!-- Google Map API -->
    <div class="col-xs-12" style="padding: 0; margin: 0;">
		  <iframe height="400" width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.9179877274264!2d120.30156551444429!3d22.61953753694775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e0483e7a12cd1%3A0x6b8f7d02ddacf2fc!2zODAy6auY6ZuE5biC6IuT6ZuF5Y2A5Lit6IiI6KGXMTU56Jmf!5e0!3m2!1szh-TW!2stw!4v1451372866062"></iframe>
    </div>
  </div>
  <!-- End Google API -->

  <!-- footer -->
  <div class="row" style="background-color: #58595b; height:auto; padding: 0;">
    <div class="col-md-1"></div>
    <div class="col-md-3">
      <h2><a href="about.html">Chin Shen Co., Ltd.</a></h2>
      <ul>
        <h3 style="color:#bcbec0">Product Type :</h3>
        <li><a href="http://www.perma-taiwan.com.tw/">Automatic Lubrication Cup / System</a></li>
        <li><a href="http://www.whitmore-taiwan.com.tw/">Industrial Lubricants</a></li>
        <li><a href="http://www.whitmore-taiwan.com.tw/cs_prod_IndustrialLubricants2_chinese.htm">Industrial Coatings</a></li>
        <li><a href="http://www.whitmore-taiwan.com.tw/cs_prod_AirSentryBreathers_chinese.htm">Filter Element</a></li>
        <li><a href="cs_products_chemical.html">Chemicals, Industrial Cleaners / Solvents</a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <h2><a href="http://www.wofoil.com.tw/wofoil_2016/INDEX.HTML">Wofoil Enterprise Co., Ltd.</a></h2>
      <ul>
        <h3 style="color:#bcbec0">Produt Type :</h3>
        <li><a href="http://www.wofoil.com.tw/wofoil_2016/products_wofoil_engineoil.html">Automotive Engine Lubricants</a></li>
        <li><a href="http://www.wofoil.com.tw/wofoil_2016/products_wofoil_engineoil.html">Automotive Gearbox Lubricant Products</a></li>
        <li><a href="http://www.wofoil.com.tw/wofoil_2016/products_wofoil_engineoil.html">Automotive Transmission Shaft Lubricants</a></li>
        <li><a href="http://www.wynns-taiwan.com.tw/wynns_consumer_products/wynns_consumerproduct_products_all.htm">Automotive Gasoline Additives</a></li>
        <li><a href="http://www.wynns-taiwan.com.tw/wynns_consumer_products/wynns_consumerproduct_products_all.htm">Automotive Diesel Additives</a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <h2><a href="#">Gerneal Agent In Taiwan:</a></h2>
      <ul>
        <h3 style="color:#bcbec0">Produt Agency :</h3>
        <li><a href="http://www.wofoil.com.tw/wofoil_2016/products_wofoil_engineoil.html">WOFOiL Automotive Engine Lubricants</a></li>
        <li><a href="http://www.wynns-taiwan.com.tw/">Wynn's Automotive Care</a></li>
        <li><a href="http://www.wofoil.com.tw/wofoil_2016/products_autol.html">AUTOL Lube Oil Products From Germany</a></li>
        <li><a href="http://www.perma-taiwan.com.tw/">Perma Automatic Lubrication Expert Frp, Germany</a></li>
        <li><a href="http://www.whitmore-taiwan.com.tw/">WHITMORE Professional Lubricants From U.S.A.</a></li>
      </ul>
    </div>
    <div class="col-md-2">
      <h2><a href="#">Follow Us On:</a></h2>
      <div style="margin:20px"> 
        <a href="#"><i class="fab fa-facebook" aria-hidden="true" style= "font-size: 40px; margin:5px"></i></a> 
        <a href="#"><i class="fab fa-twitter-square" aria-hidden="true" style= "font-size: 40px; margin:5px"></i></a> 
        <a href="#"><i class="fab fa-google-plus-square" aria-hidden="true" style= "font-size: 40px; margin:5px"></i></a> 
      </div>
    </div>
  </div>

  <div class="row" style="background-color: #58595b; text-align: center">
  	<div class="col-md-12">
    	<p style="padding:15px;"><a href="#">Copyright © 2017 Meng-Tse Li</a></p>
    </div>
  </div>

  <!-- Footer end here -->
</div>
<!-- Container end here -->

<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/effect.js"></script>
<script>
    // If user clicks anywhere outside of the modal, Modal will close
    var modal = document.getElementById('modal-wrapper');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>
