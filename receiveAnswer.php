<?php
session_start();
require_once('./unirest-php/src/Unirest.php');

// Ask the question and receive an answer

$link = "https://webknox-question-answering.p.mashape.com/questions/answers" .
        "?answerLookup=false&answerSearch=false&question=" .
        $_SESSION['question'] . "%3F";


$response = Unirest\Request::get($link, array(
    "X-Mashape-Key" => "dopiHSyaJHmsha5ZgeGW4tzoF90sp1lNUqsjsn2yyl8Fs7TFvb",
    "Accept" => "application/json"
  )
);

// Decode the response
$answer = json_encode($response->body->answer);
$answer = json_decode($answer);

// Set up the new session parameter, which contains the normal-language
// answer
$_SESSION['answer'] = $answer;

// Head to the next page
header('Location: showResponse.php');
exit;

 ?>
