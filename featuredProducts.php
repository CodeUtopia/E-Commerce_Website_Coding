<?php session_start(); ?>
<!-- featured.php -->
<!--Program and Code by Sattyik Kundu-->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Arts N' Crafts Depot - Featured Products</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="refresh" content="60" />
    <link rel="stylesheet" type="text/css" href="cssNew.css" />
    <script type="text/javascript" src="scripts/menuScript.js">
    </script>
  </head>
  <body>
    <div id="page">
      <?php
	  include("common/logoHeaderV2.php");
	  ?>
      <div id="content">
	    <?php
	    include("common/mainMenu.html");
	    ?>
        <div id="textOnly">
          <p>Coming soon ... a list of our featured products. We will
          frequently have products on special, and will be introducing
          new products regularly, so keep watching this space for details.</p>
        </div>
		<?php
	    include("common/footerMenu.html");
	    ?>
      </div>
    </div>
  </body>
</html>
