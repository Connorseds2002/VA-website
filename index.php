<!doctype html>
<html><!-- InstanceBegin template="/Templates/website.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Home vEuroJet</title>
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
    <!-- InstanceBeginEditable name="EditRegion1" -->    <!-- Slide Show -->
    <section>
      <img class="mySlides" src="./images/Image1.png" width="50%">
      <img class="mySlides" src="./images/Image3.png" width="50%">
      <img class="mySlides" src="./images/Image2.png" width="50%">
	  <img class="mySlides" src="./images/Image4.png" width="50%">
	  <img class="mySlides" src="./images/Image5.png" width="50%">
    </section>

    <script>
    // Automatic Slideshow - change image every 3 seconds
      var myIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
       myIndex++;
       if (myIndex > x.length) {myIndex = 1}
       x[myIndex-1].style.display = "block";
      setTimeout(carousel, 6000);}
    </script><!-- InstanceEndEditable -->

	  <footer class="w3-container w3-padding-64 w3-center w3-blue-grey w3-xlarge">
      <a href="#"><i class="fa fa-facebook-official"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <p class="w3-medium">
        This website has been crated by <a href="https://wwww.justicemc.co.uk/info" target="_blank">Connnor Sedman - EJV007</a>
      </p>
</footer>
</body>
<!-- InstanceEnd --></html>
