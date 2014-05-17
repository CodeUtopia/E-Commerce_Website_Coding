<?php session_start(); ?>
<!-- eStore.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Arts N' Crafts Depot - E-Store</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="refresh" content="60" />
    <link rel="stylesheet" type="text/css" href="cssNew.css" />
	<script type="text/javascript" src="scripts/menuScript.js"></script>
	<?php include "scripts/database.php"; ?>
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
          <p><strong>Thank you for visiting our e-store for all your Artistic
          endeavors.</strong><br />We carry a large selection of art supplies to 
          enable artists to express their creativity.<br />For your shopping and browsing
          convenience, please choose one of the following links:</p>
          <ul class="estore">
            <li>Want to see what we have to offer?<br />
            <a class="noDecoration" href="catalog.php">Click here to browse
            our exciting product catalog.</a></li>
            <li>Ready to purchase and already have a username and password?<br />
            <a class="noDecoration" href="logIn.php">Click here to log in to
            our e-store.</a></li>
            <li>Need to register for our e-store so you can make purchases?<br />
            <a class="noDecoration" href="registerCustomer.php"> Click here to register.
            You only need to do it once.</a></li>
            <li>Trying to log in as a different user?<br />
            <a class="noDecoration" href="logOut.php">Click here first to log
            out.</a></li>
          </ul>
        </div>
		<?php
	    include("common/footerMenu.html");
	    ?>
      </div>
    </div>
  </body>
</html>
