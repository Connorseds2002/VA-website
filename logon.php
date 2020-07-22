<?php require_once('Connections/mysql.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_mysql, $mysql);
$query_Logon = "SELECT * FROM `user`";
$Logon = mysql_query($query_Logon, $mysql) or die(mysql_error());
$row_Logon = mysql_fetch_assoc($Logon);
$totalRows_Logon = mysql_num_rows($Logon);

$query_Logon = "SELECT * FROM `user`";
$Logon = mysql_query($query_Logon, $mysql) or die(mysql_error());
$row_Logon = mysql_fetch_assoc($Logon);
$totalRows_Logon = mysql_num_rows($Logon);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['Username'])) {
  $loginUsername=$_POST['Username'];
  $password=$_POST['Password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "logon.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_mysql, $mysql);
  
  $LoginRS__query=sprintf("SELECT Username, Password FROM `user` WHERE Username=%s AND Password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $mysql) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/website.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Logon vEuroJet</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="stylesheet/layout.css">
  <body>

    <!-- Navigation -->
  <nav class="w3-bar w3-black">
	  <a href="index.php"><img src="./images/logo.png" width="10%"></a>
	  <p></p>
      <a href="./index.php" class="w3-button w3-bar-item">Home</a>
      <a href="./about-us.php" class="w3-button w3-bar-item">Info</a>
      <a href="./logon.php" class="w3-button w3-bar-item">Logon</a>
      <a href="./contact.php" class="w3-button w3-bar-item">Contact</a>
	  <a href="./signup.php" class="w3-button w3-bar-item">Signup</a>
    </nav>
    <!-- InstanceBeginEditable name="EditRegion1" -->
    <div id="Content">
	  <div id="ContentLeft"></div>
	  <div id="ContentRight"><form ACTION="<?php echo $loginFormAction; ?>" METHOD="POST"><table width="400" border="0">
  <tbody>
    <tr>
      <td> Username: <input type="text" name="Username"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td> Password: <input type="password" name="Password"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="button" name="LogOn" value="Logon"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</form></div>
    </div>
<!-- InstanceEndEditable -->

	  <footer class="w3-container w3-padding-64 w3-center w3-blue-grey w3-xlarge">
      <a href="#"><i class="fa fa-facebook-official"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <p class="w3-medium">
        This website has been crated by <a href="https://wwww.justicemc.co.uk/info" target="_blank">Connnor Sedman - EJV007</a>
      </p>
</footer>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($Logon);
?>
