
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Just Ask It</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/styleAnimation.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <style>
    div.inline {
      margin-top: 20% !important;
      margin-left: 8% !important;
      margin-right: 8% !important;
    }
    </style>
  </head>

  <body>

    <section class="webdesigntuts-workshop">

	     <form action="receiveQuestion.php" method="post">
		       <input type="search" placeholder="What are you looking for?"
                  name="question-bar">
		         <button type="submit" value="Ask">Ask</button>
	     </form>

       <div id = "responseDIV">
         <h1>#JustAskIt</h1>
         <h3>Hello. My name is Joana. I'm new to this world, yet I claim to be able to answer
           <span style="text-decoration: line-through">every</span> most of
           your questions. Don't believe me? Just ask it.
        </h3>
        <br>


          <div id="ajaxloader3" class = "inline">
            <div class="outer"></div>
            <div class="inner"></div>
          </div>

          <div id="ajaxloader3" class = "inline">
            <div class="outer"></div>
            <div class="inner"></div>
          </div>

          <div id="ajaxloader3" class = "inline">
            <div class="outer"></div>
            <div class="inner"></div>
           </div>

           <br class="clearBoth" />


    </section>
    <?php
    $string = "Hello. My name is Joana. I will present myself during
               Alex's time slot. He thought this would be a good idea.";
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
    ?>
    <audio autoplay id="sound" src="<?php echo $voice['response']; ?>" ></audio>
    <?php
    $string = "My purpose is to try and answer all of the questions you may have.
               I am particularly good with Geography, History, and even maths.";
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
    ?>
    <audio  id="sound" src="<?php echo $voice['response']; ?>" ></audio>
    <?php
    $string = "I was built using two API's from Mashape. The first one processes
               your question and generates a response, and the second one just
               gives me this beautiful voice.";
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
    ?>
    <audio  id="sound" src="<?php echo $voice['response']; ?>" ></audio>
</body>
</html>
