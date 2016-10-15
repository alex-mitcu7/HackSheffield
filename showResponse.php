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


  session_destroy();

 ?>

 <!DOCTYPE html>
 <html >
   <head>
     <meta charset="UTF-8">
     <title>Glowing Pulse Form</title>
     <link rel="stylesheet" href="./css/normalize.css">
     <link rel="stylesheet" href="./css/style.css">
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   </head>

   <body>
     <section class="webdesigntuts-workshop">
       <div id = "responseDIV">
         <h2><?php echo $string; ?></h2>
         <form action="receiveQuestion.php" method="post">
  		       <input type="search" placeholder="What are you looking for?"
                    name="question-bar">
             <button type="submit" value="Ask me again?">Ask me again?</button>

  	     </form>

       </div>

     </section>

 </body>
 </html>
