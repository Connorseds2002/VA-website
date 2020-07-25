<?php
$error = NULL;
if(isset($_POST['submit'])){

// Getting the data from the form to use for the data bace to add the used to the data bace

$Fn= $_POST['Fn'];
$Ln= $_POST['Ln'];
$Username= $_POST['Username'];
$Email= $_POST['Email'];
$Rp= $_POST['rp'];
// conneating to the data bace of where the data of all of the uses for the ntwork is stored
$mysqli = new MySQLi('localhost', 'justicemc_fsd', 'buZO.J2Wv9,w', 'justicem_atc.aircraft');
$Fn = $mysqli->real_escape_string($Ln);
$Ln = $mysqli->real_escape_string($LN);
$Username = $mysqli->real_escape_string($Username);
$Email = $mysqli->real_escape_string($Email);
$Rp = $mysqli->real_escape_string($Rp);

// creating a Vkey for the user to use to make shore that there are not a rebot on the network
$vKey = md5(time() . $fn . $Ln);

// adding the data on to the data so then that you uses will be added to the network and get and email with there id and Vkey 
$insert = $mysqli->query("INSERT INTO accounts(firstname,lastname,Username,email,password) VALUES('$Fn','$Ln','$Username','$email','$rp'");

if($insert){
    echo "Success you have been created an account on our network and you will be sent an email in the next 10mins from us to chck you are a real persion with your id and and key";
    $result = $mysqli->query("SELECT id FROM accounts LIMIT 1");
    $to = $Email;
    $subject = "Justicemc Flight Sim network Verification";
    $message = "$Fn Thanks for creating an account on the vEuroJet website,\r\n
    CID: $result \r\n
    Code: $vKey \r\n";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: noreply@justicemc.co.uk' . "\r\n";
    $headers .= 'Cc: admin@justicemc.co.uk' . "\r\n";
}else{
    $error = "<P>"$mysqli->error "</p>";
}
}
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
	  	<div id="ContentRight"><form method="POST" action="">
            <table border="0" align="right" cellpadding="5">
                <tr>
                    <td align="right">Firstname:</td>
                    <td><input type="txt" name="Fn" required></td>
                </tr>
                <tr>
                    <td align="right">Lastname:</td>
                    <td><input type="txt" name="Ln" required></td>
                </tr>
                <tr>
                    <td align="right">Username:</td>
                    <td><input type="txt" name="Username" required></td>
                </tr>
                <tr>
                    <td align="right">Email:</td>
                    <td><input type="email" name="Email" required></td>
                </tr>
                <tr>
                    <td align="right">Passowrd:</td>
                    <td><input type="password" name="Rp" required></td>
                </tr>
                <tr>
                    <td align="rigth">FIR:</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Register for an account on our network"/></td>
                </tr>
            </table>
        </form></div>
		<div id="ContentLeft"></div>
	  </div>
	  <?php
        echo $error
        ?>
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