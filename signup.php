<?php require_once('Connections/mysql.php');
	if(isset($_POST['Register'])){
		session_start();
		$Fname = $_POST['Fname'];
		$Lname = $_POST['Lname'];
		$uername = $_POST['username'];
		$Email = $_POST['Email'];
		$password = $_POST['password'];
		
		
		$sql-> $mysql("INSERT INTO users (Fname, Lname, Username, Email, Password)Values('{$Fname}','{$Lname}','{$uername}','{$Email}','{$password}')");
	}
?>
<html><!-- InstanceBegin template="/Templates/website.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>SignUp vEuroJet</title>
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
	  	<div id="ContentRight"><form method="POST" action="" name="Register" id="Register"><table width="416" border="0" >
  <tbody>
    <tr>
      <td><table border="0">
        <tbody>
          <tr>
            <td><label for="Fname">First Name:</label>
              <input name="Fname" type="text" class="StyleTextField" id="Fname"></td>
            <td><label for="Lname">Last Name:</label>
              <input type="text" name="Lname" class="StyleTextField" id="Lname"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr >
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label for="email">Email:</label>
        <input type="email" name="email" class="StyleTextField" id="email"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label for="Username">Username:</label>
        <input type="text" name="Username" class="StyleTextField" id="username"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label for="password">Password:</label>
        <input type="password" name="password" class="StyleTextField" id="password"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="button" name="button" id="button" value="Register"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
	  	    <input type="hidden" name="MM_insert" value="Register">
        </form></div>
		<div id="ContentLeft"></div>
	  </div>
	  <p></p>
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