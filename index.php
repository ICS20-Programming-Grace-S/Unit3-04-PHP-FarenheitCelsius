<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Fahrenheit to Celsius, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Grace S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Fahrenheit to Celsius, with PHP</title>
  </head>
  <body>
    
    <!-- PHP echo to print the html to the page -->
    <center><h1><?php 
			echo "Fahrenheit to Celsius, with PHP";?></h1></center>

    <!-- Image -->
    <?php
      echo '<center><img src= "./images/thermometer.jpg" alt="sphere" width="45%" height="auto"></center>';
    ?>

    <!-- Formula for Celsius -->
  <center><?php
			echo "<h3>Celsius = 5/9 * (fahrenheit - 32) </h3>";
		?></center>
    
    <!-- user input -->
    <center><form action="./results.php" method="post" target="results">  
      <label for=fahrenheit">Fahrenheit (°F) :</label>
      <input type="text"  name="fahrenheit" id="fahrenheit" placeholder="Enter..." name="fahrenheit"></center>
      <br>
      <br>

      <!-- Button to Display Celsius -->
      <center><input type="submit" value="Calculate Celsius"></center>
      <br>
      
    <!-- iframe for the results to show on the web page. -->
      <center><iframe id="results" name="results">	
      </iframe></center>
  </body></center>
</html>