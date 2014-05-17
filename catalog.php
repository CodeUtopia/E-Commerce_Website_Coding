<?php session_start(); ?>

<!-- catalog.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Arts N' Crafts Depot - Product Catalog</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="cssNew.css" />
    <script type="text/javascript" src="scripts/menuScript.js"></script>
    <?php include "scripts/database.php" ?>
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
        <div id="departmentList">
          <?php include "scripts/displayDepartments.php" ?>
        </div>
        <?php
	    include("common/footerMenu.html");
	    ?>		
      </div>
    </div>
  </body>
</html>
