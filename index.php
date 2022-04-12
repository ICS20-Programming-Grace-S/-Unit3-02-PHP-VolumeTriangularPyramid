<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Grace S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Volume of a Triangular Pyramid</title>
  </head>
  <body>
    
    <!-- PHP echo to print the html to the page -->
    <center><h1><?php 
			echo "Volume of a Triangular Pyramid";?></h1></center>

    <?php
      echo '<center><img src= "./images/triangle_pyramid.jpg" alt="volume" width="45%" height="auto"></center>';
    ?>

    <!-- Formula for volume -->
    <center><h2><?php echo "V = (1/6) * a * b * h";?></h2></center>
    
    <!-- Buttons and Text Field -->
    <center><form method= "post">
      Side a (m): <input type="float" name="aVolume">
      <br>
      <br>
      Side b (m): <input type="float" name="bVolume">
      <br>
      <br>
      Height (m): <input type="float" name="heightVolume">
      <br>
      <br>
      <input type="submit" name="btn_submit" value="Calculate Volume" />
    </form></center>

    <!-- Output -->
    <?php
      if($_POST['btn_submit']=="Calculate Volume")
      {
        $aVolume = $_POST["aVolume"];
        $bVolume = $_POST["bVolume"];
        $heightVolume = $_POST["heightVolume"];
        $volume = (1/6) * $aVolume * $bVolume * $heightVolume;
        $volume = number_format($volume, 2);
        echo "<br><center><h3>The volume of the triangular pyramid is " . $volume . " m<sup>3</sup>";
      }
    ?>     
    <br>
    <br>
  </body>
</html>