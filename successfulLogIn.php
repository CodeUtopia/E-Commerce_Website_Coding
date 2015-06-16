<?php session_start(); ?>
<!-- eStore.php -->
<!--Program and Code by Sattyik Kundu-->
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
          <p><strong>You have succesfully logged in.</strong><br />
		  You can determine your login status by looking at the top right<br />
          of the header. From here on, you can make purchases as well as send<br />		  
          feedback to our company about our services and products.<br />
          Here are some links if you wish to do any of the following:</p>
          <ul class="successLogIn">
            <li>Would you like to purchase?<br />
              <a class="noDecoration" href="catalog.php">Click here to browse catalog and make purchases.</a>
			</li>
            <li>Would you like to send us feedback?<br />
              <a class="noDecoration" href="registerCustomer.php"> Click here send feedback.</a>
			</li>
            <li>Trying to log in as a different user?<br />
              <a class="noDecoration" href="logOut.php">Click here first to log out first.</a>
			</li>
          </ul>
        </div>
		<?php
	    include("common/footerMenu.html");
	    ?>
      </div>
    </div>
  </body>
</html>
