<?php
  session_start();
  $question = $_POST['question-bar'];

  // Pre - process the question
  // Replace ' ' with '+'
  $question = str_replace('?', '', $question);
  $question = str_replace(" ", "+", $question);
  $question = str_replace("++", "+", $question);
  $_SESSION['question'] = $question;


  header('Location: receiveAnswer.php');
  exit;
 ?>
