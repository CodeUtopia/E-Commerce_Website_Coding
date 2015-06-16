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
		  <p><strong>You login credentials have not been accepted.</strong><br />
		    If the username and password are not accepted,<br />
            either username and/or password was incorrect or <br />
            you weren't registered. In that case, please re-enter <br />
			the correct login information.</p>
          <ul class="logAgain">
            <li>If you failed your login, please click here to try again: <br />
            <a class="noDecoration" href="logIn.php">Click here to login.</a></li>
			<li>If you haven't registered, please register first before logging in: <br />
            <a class="noDecoration" href="registerCustomer.php">Click here to register.</a></li>
          </ul>
        </div>
		<?php
	    include("common/footerMenu.html");
	    ?>
      </div>
    </div>
  </body>
</html>
