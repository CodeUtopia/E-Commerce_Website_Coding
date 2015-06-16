<?php
//purchase.php
session_start();
$prod = $_GET["prod"];
if(isset($_SESSION['customer_id'])== false){
    $_SESSION["purchasePending"] = stripslashes($prod);
    header('Location: logIn.php');
}
?>
<!--Program and Code by Sattyik Kundu-->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Arts N' Crafts Depot</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="cssNew.css" />
    <script type="text/javascript" src="scripts/menuScript.js"></script>
    <script type="text/javascript" src="scripts/orderScript.js"></script>
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
        <div id="purchaseProducts">
          <?php include "scripts/processPurchase.php" ?>
        </div>
	    <?php
	    include("common/footerMenu.html");
	    ?>	 
      </div>
    </div>
  </body>
</html>
