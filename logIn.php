<?php
//login.php
session_start();
?>
<!--Program and Code by Sattyik Kundu-->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Arts N' Crafts Depot - Login</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="cssNew.css" />
    <script type="text/javascript" src="scripts/menuScript.js"></script>
    <script type="text/javascript" src="scripts/loginScript.js"></script>
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
          <h4>Login Form</h4>
          <p>
		    <a href="registerCustomer.php" class="noDecoration">If you have not yet
              registered for our e-store, please click here to register.
			</a>
		  </p>
          <form id="loginForm" name="loginForm" action="scripts/processLogin2.php"
            method="post" onsubmit="return validateLoginForm();"> 
            <table summary="Login Form">
              <tr>
                <td>Username:</td>
                <td valign="top"><input name="customer_nm" type="text"
                  id="customer_nm" size="20" />
				</td>
              </tr>
              <tr>
                <td>Password:</td>
                <td valign="top"><input name="customer_pw" type="password"
                  id="customer_pw" size="20" />
			    </td>
              </tr>
              <tr>
                <td><input type="submit" value="Login" /></td>
                <td><input type="reset" value="Reset Form" /></td>
              </tr>
            </table>
          </form>
        </div>
		<?php
	    include("common/footerMenu.html");
	    ?>
      </div>
    </div>
  </body>
</html>
