<?php
  $url = substr($_SERVER["REQUEST_URI"], 1);
  $errCode = $_GET["code"];
  $errMeanings = ["403" => "Forbidden", "404" => "Page Not Found"];
  $errMeaning = $errMeanings[$errCode];
  $texts = ["403" => "You do not have access to view the file `#`.", "404" => "The page `#` was not found on the server."];
  $text = str_replace("#", $url, $texts[$errCode]);
  $title = $errCode . " " . $errMeaning;
  $heading = $errMeaning;
  if($errMeaning == "") {
    $title = "Error";
    $heading = "An error occured";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <style>
      body {
        font-family: Helvetica, Arial;
        text-align: center;
      }
      #num {
        display: inline-block;
        color: red;
        transform-origin: 0 0;
        transform: rotate(45deg);
        animation: hang 1.5s cubic-bezier(0.3, -0.2, 0.62, 1.5) 1;
      }
      @keyframes hang {
        from {
          transform: rotate(0deg);
        }
        to {
          transform: rotate(45deg);
        }
      }
    </style>
  </head>
  <body>
    <h1><span id="num"><?php echo $errCode; ?></span> <?php echo $heading; ?></h1>
    <h3><?php echo $text; ?> <a href="/">Home</a></h3>
  </body>
</html>
