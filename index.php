<?php session_start(); ?>
<!--index.php-->	
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Arts N' Crafts Depot</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="refresh" content="60" />
    <link rel="stylesheet" type="text/css" href="cssNew.css" />
    <script type="text/javascript" src="scripts/rotateScript.js"></script>
	<script type="text/javascript" src="scripts/menuScript.js"></script>
  </head>
  <body onload="startRotation()">
    <div id="page">
	  <?php
	  include("common/logoHeaderV2.php");
	  ?>
      <div id="content">
	    <?php
	    include("common/mainMenu.html");
	    ?>
        <div id="textLeft">
          <h3>Welcome to Arts N' Crafts Depot - Where all your artistic needs 
          are available</h3>
          <p>We are dedicated to the distribution
          of arts and craft supplies at affordable prices
          and fast shipping.</p>
          <p>All our products are quality products from well reputed
          vendors. Our product range is comprehensive to fill your 
          arts and crafts needs. All orders can be shipped anywhere
          in the world fast and securely.</p>
		  <p>You may go to the E-Store dropdown menu to view the catalog or 
		  register as user. Registration is necessary if you wish to be able
		  to login. Only logged users may purchase or send feedback.</p>
        </div>
		<div id="rightBlock">
		  <div id="image">
            <img id="indexImage" src="images/imageSlides/ArtSupplies0.jpg" alt="Art Supplies" />
		  </div>
		</div>
		<?php
	    include("common/footerMenu.html");
	    ?>
      </div>
    </div>
  </body>
</html>

