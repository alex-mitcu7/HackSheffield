<?php
  session_start();
  require_once('voicerss_tts.php');
  // Print the response

  $string = $_SESSION['answer'];


  $vocal = new VoiceRSS;
  $voice = $vocal->speech([
    'key' => 'f97c77ad9ca2437cb98a89076a952aa7',
    'hl' => 'en-us',
    'src' => $string,
    'r' => '0',
    'c' => 'wav',
    'f' => '44khz_16bit_stereo',
    'ssml' => 'false',
    'b64' => 'true'
  ]);

  echo '<audio src="' . $voice['response'] . '" autoplay="autoplay"></audio>';

  // Alternatively, print the content as well
  echo $string;

  session_destroy();

 ?>
