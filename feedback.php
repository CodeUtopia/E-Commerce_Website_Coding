<?php session_start(); 
if(isset($_SESSION['customer_id'])== false){
    header('Location: xxxfeedback.php');
}
?>
<!-- feedback.php -->
<!--Program and Code by Sattyik Kundu-->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Arts N' Crafts Depot - User Feedback</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="cssNew.css" />
    <script type="text/javascript" src="scripts/menuScript.js">
    </script>
    <script type="text/javascript" src="scripts/feedbackReview.js">
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
        <div id="textOnly" class="FeedbackForm">
          <h4>Feedback Form ... Let Us Know What You Think</h4>
          <form id="contactForm" onsubmit="return validateContactForm()"
          action="scripts/processFeedbackReview.php" method="post">
            <table summary="Feedback Form Version 2 with Submit, Reset Buttons">
              <tr valign="top">
                <td>Salutation:</td>
                <td><select name="salute">
                  <option></option>
                  <option>Mrs.</option>
                  <option>Ms.</option>
                  <option>Mr.</option>
                  <option>Dr.</option>
                </select></td>
              </tr>
              <tr valign="top">
                <td><label for="firstName">First Name:</label></td>
                <td><input  id="firstName" type="text" name="firstName"
                size="40" /></td>
              </tr>
              <tr valign="top">
                <td><label for="lastName">Last Name:</label></td>
                <td><input  id="lastName" type="text" name="lastName"
                size="40" /></td>
              </tr>
              <tr valign="top">
                <td><label for="email">E-mail Address:</label></td>
                <td><input id="email" type="text" name="email" size="40" /></td>
              </tr>
              <tr valign="top">
                <td><label for="phone">Phone Number:</label></td>
                <td><input id="phone" type="text" name="phone" size="40" /></td>
              </tr>
              <tr valign="top">
                <td><label for="subject">Subject:</label></td>
                <td><input id="subject" type="text" name="subject"
                size="40" /></td>
              </tr>
              <tr valign="top">
                <td><label for="comments">Comments:</label></td>
                <td><textarea id="comments" name="message" rows="10" cols="30">
                </textarea></td>
              </tr>
              <tr>
                <td colspan="2"><p><label for="reply">Please check here if you 
                wish to receive a reply: </label><input id="reply"
                type="checkbox" name="reply" value="yes" /></p></td>
              </tr>
              <tr>
                <td><input type="submit" value="Send Feedback" /></td>
                <td align="right"><input type="reset" value="Reset Form" /></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
      <?php
	    include("common/footerMenu.html");
	  ?>
    </div>
  </body>
</html>
