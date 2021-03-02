<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  </head>
  <body>

    <header>
      <div class="container">
        <img src="img/logo.png" alt="logo">
      </div>
    </header>

    <?php require_once __dir__ . "/database/database.php"; ?>

    <div class="cds-container container">

      <?php

        foreach($albums as $album) { ?>

            <div class="cd">
              <img src="<?php echo $album["poster"] ?>" alt="">
              <h3> <?php echo $album["title"] ?> </h3>
              <span class="author"> <?php echo $album["author"] ?> </span>
              <span class="year"> <?php echo $album["year"] ?> </span>
            </div>

      <?php  } ?>

    </div>

  </body>
</html>
