<?php session_start(); ?>
<!--Program and Code by Sattyik Kundu-->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Arts N' Crafts Depot - User Feedback</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="refresh" content="60" />
    <link rel="stylesheet" type="text/css" href="cssNew.css" />
	<script type="text/javascript" src="scripts/menuScript.js"></script>
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
        <div id="textLeft">
          <h3>You are not logged in.</h3>
          <p>You must login to send feedback.</p>
          <ul class="estore">
            <li>
              <a class="noDecoration" href="logIn.php">Click here to log in in order
              to be able to send feedback.</a></li>
            <li>
			  <a class="noDecoration" href="registerCustomer.php"> Click here to register
              if you haven't registered yet.</a></li>
          </ul>
        </div>
		<?php
	    include("common/footerMenu.html");
	    ?>
      </div>
    </div>
  </body>
</html>

