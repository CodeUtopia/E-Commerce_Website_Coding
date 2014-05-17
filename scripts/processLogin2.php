<?php
//processLogin.php
session_start();
include "database.php";
$customer_name = $_POST['customer_nm'];
$customer_password = $_POST['customer_pw'];

$query = "SELECT * FROM Customers WHERE login_name="."'".$customer_name."'".";";  
$rowsWithMatchingLoginName = mysql_query($query)
    or die(mysql_error());
$numRecords = mysql_num_rows($rowsWithMatchingLoginName);

if ($numRecords == 1)
{
    $row = mysql_fetch_array($rowsWithMatchingLoginName);
    if ($customer_password == $row['login_password'])
    {
        $_SESSION['customer_id'] = $row['customer_id'];
        $_SESSION['salutation'] = $row['salutation'];
        $_SESSION['customer_first_name'] = $row['customer_first_name'];
        $_SESSION['customer_middle_initial'] = $row['customer_middle_initial'];
        $_SESSION['customer_last_name'] = $row['customer_last_name'];
        $prod = $_SESSION['purchasePending'] ;
		
		echo "the customer id is ".$_SESSION['customer_id'].".<br />";
		
		$goto = "Location: logIn.php";
        		
        if ($prod != "")
        {
            unset($_SESSION['purchasePending']);
            $goto  = "Location: ../purchasing.php?prod=$prod";
        }
        else
        {
            $ref = getenv("HTTP_REFERER"); 
            $goto  = 'Location: ' . $ref;
        } 
		echo "successfully went to logIn.php";
        header($goto); 
    }
	else
	{
		header('Location: ../logIn.php?retry=true');
	}
}
//Either no records were received or the password did not match
header('Location: ../logIn.php?retry=true');  
?>
