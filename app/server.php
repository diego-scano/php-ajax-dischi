<?php

  require_once __dir__ . "/../database/database.php";

  header('Content-Type: application/json');

  echo json_encode($albums);
