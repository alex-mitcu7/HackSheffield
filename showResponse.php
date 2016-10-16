<?php
  session_start();
  require_once('voicerss_tts.php');
  // Print the response


  $string = $_SESSION['answer'];
  //string = "This is just a test.";

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


  session_destroy();

 ?>

 <!DOCTYPE html>
 <html >
   <head>
     <meta charset="UTF-8">
     <title>Just Ask It</title>
     <link rel="stylesheet" href="./css/normalize.css">
     <link rel="stylesheet" href="./css/style.css">
       <link rel="stylesheet" href="./css/styleAnimation.css">
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
     <script type="text/javascript">
       $(window).load(function() {
    	    $(".loader").fadeOut("slow");
        })
      </script>
      <style>
      div.inline {
        margin-top: 5%;
      }
      </style>
   </head>

   <body>
     <section class="webdesigntuts-workshop">
       <br>
       <h1>Here is your answer.</h1>
       <br>
       <div id="ajaxloader3" class="inline">
         <div class="outer"></div>
         <div class="inner"></div>
       </div>

       <div id="ajaxloader3" class="inline">
         <div class="outer"></div>
         <div class="inner"></div>
       </div>

       <div id="ajaxloader3" class="inline">
         <div class="outer"></div>
         <div class="inner"></div>
       </div>

       <div id = "responseDIV">
         <h2><?php echo $string; ?></h2>

         <form action="receiveQuestion.php" method="post">
  		       <input type="search" placeholder="What are you looking for?"
                    name="question-bar">
             <button type="submit" value="Ask me again?">Ask me again?</button>

  	     </form>
         <br>

       </div>
       <audio autoplay id="sound" src="<?php echo $voice['response']; ?>" ></audio>


     </section>

 </body>
 </html>
