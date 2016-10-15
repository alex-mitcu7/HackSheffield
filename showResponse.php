<?php
  session_start();

  // Print the response
  echo $_SESSION['answer'];

  session_destroy();

 ?>
