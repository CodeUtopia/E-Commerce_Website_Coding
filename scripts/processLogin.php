<?php
//processLogin.php
session_start();
include "database.php";

//$customer_nm = $_GET['customer_nm'];
//$query = "SELECT * FROM Customers WHERE login_name="."'".$_customer_nm."'".";";
$query = "SELECT "."'".$_customer_pw."'"." FROM Customers WHERE login_name="."'".$_customer_nm."'".";";  

$rowsWithMatchingLoginName = mysql_query($query)
    or die(mysql_error());
$numRecords = mysql_num_rows($rowsWithMatchingLoginName);
echo "the number is records is ".$numRecords."<br />";
if ($numRecords == 1)
{
    $row = mysql_fetch_array($rowsWithMatchingLoginName);
    if ($customer_pw == $row['login_password'])
    {
        $_SESSION['customer_id'] = $row['customer_id'];
        $_SESSION['salutation'] = $row['salutation'];
        $_SESSION['customer_first_name'] = $row['customer_first_name'];
        $_SESSION['customer_middle_initial'] = $row['customer_middle_initial'];
        $_SESSION['customer_last_name'] = $row['customer_last_name'];
        $prod = $_SESSION['purchasePending'] ;
		
		echo "the customer id is ".$_SESSION['customer_id'].".<br />";
		/*
        if ($prod != "")
        {
            unset($_SESSION['purchasePending']);
            $goto  = "Location: ../purchase.php?prod=$prod";
        }
        else
        {
            $ref = getenv("HTTP_REFERER"); 
            $goto  = 'Location: ' . $ref;
        }
        header($goto); */
    }
}
//Either no records were received or the password did not match
header('Location: ../logIn.php?retry=true');
//header('Location: logIn.php?retry=true');
?>
