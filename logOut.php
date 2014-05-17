<?php
//logOut.php
session_start();
$notLoggedIn =false;
if(isset($_SESSION["customer_id"])){
  if ($_SESSION["customer_id"] == ""){
    $notLoggedIn = true;
  }
}
session_unset();
session_destroy();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Nature's Source - Logging Out</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
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
        <div id="textOnly" class="FeedbackForm">
        <?php if ($notLoggedIn) { ?>
        <p>Thank you for visiting Arts N' Crafts Depot.<br />
        You have not yet logged in.</p>
        <p><a href="logIn.php" class="noDecoration"> Click here if you wish to
          log in.</a></p>
        <p><a href="catalog.php" class="noDecoration"> Click here to browse
          our product catalog.</a></p>
        <?php } else { ?>
        <p>Thank you for visiting our e-store.<br />
        You have successfully logged out.</p>
        <p><a href = "logIn.php" class="noDecoration"> Click here if you wish
          to log back in.</a></p>
        <p><a href = "catalog.php" class="noDecoration"> Click here to
          browse our product catalog.</a></p>
        <?php } ?>
        </div>
		<?php
	    include("common/footerMenu.html");
	    ?>
      </div>
    </div>
  </body>
</html>
