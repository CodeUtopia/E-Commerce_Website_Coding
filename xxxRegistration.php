<?php session_start() ?>

<!-- registration.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Nature's Source - Registration</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
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
        <div id="textOnly" class="FeedbackForm">
        <?php include "scripts/processRegistration.php"; ?>
        </div>
      </div>
      <?php
	    include("common/footerMenu.html");
	  ?>
    </div>
  </body>
</html>
