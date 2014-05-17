<?php session_start(); ?>

<!-- news.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Arts N' Crafts Depot - News</title>
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
          <p>Coming soon ... news about, and related to, your artistic needs and our
          business. As time goes on, we will gather more and more information
          related to health issues, from you our clients, from our suppliers,
          and from many other sources. We will try to keep that information
          in a readily accessible form and place so that you may access it
          at any time.</p>
        </div>
		<?php
	    include("common/footerMenu.html");
	    ?>
      </div>
    </div>
  </body>
</html>
