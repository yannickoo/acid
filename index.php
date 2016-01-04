<?php

  define('IMAGES_DIR', 'images/');

  $files = scandir(IMAGES_DIR);
  $files = array_slice($files, 2);

  $background = array_rand($files);
  $background = IMAGES_DIR . $files[$background];
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACID</title>
    <style>
      html,
      body {
        height: 100%;
      }

      body {
        background-image: url(<?php print $background; ?>);
        background-position: center center;
        background-repeat: no-repeat;
      }
    </style>
  </head>
  <body>
  </body>
</html>
