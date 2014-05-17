<?php session_start(); ?>

<!-- locations.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Nature's Source - Store Locations</title>
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
        <div id="textRight">
          <p>Coming soon ... a list of our store locations.
          Each location will be accompanied by contact information and a
          link to a map showing showing you how to find us at that
          location.</p>
          <p>In the meantime, here is our main location:<br />
          5029 Hurontario Street Unit 2<br />
          Bizzexel, ON L4Z 3X7<br />
          Tel: 905.602.6989<br />
		  Email: gnexCraftsDepot@gmail.com<br />
          Fax: 905.190.1305</p>
        </div>
		<?php
	    include("common/footerMenu.html");
	    ?>
      </div>
    </div>
  </body>
</html>
