<?php

// Dilbert Quotes
$quote_array = array(
    "I say no to alcohol, it just doesn't listen.",
    "A friend in need is a pest indeed.",
    "Marriage is one of the chief causes of divorce.",
    "Work is fine if it doesn't take too much of your time.",
    "When everything comes in your way you're in the wrong lane.",
    "The light at the end of the tunnel may be an incoming train...",
    "Born free, taxed to death.",
    "Everyone has a photographic memory, some just don't have film.",
    "Life is unsure; always eat your dessert first.",
    "Smile, it makes people wonder what you are thinking.",
    "If you keep your feet firmly on the ground, you'll have trouble putting on your pants.",
    "It's not hard to meet expenses, they are everywhere.",
    "I love being a writer... what I can't stand is the paperwork.",
    "A printer consists of 3 main parts: the case, the jammed paper tray and the blinking red light.",
    "The guy who invented the first wheel was an idiot. The guy who invented the other three, he was the genius.",
    "The trouble with being punctual is that no one is there to appreciate it.",
    "In a country of free speech, why are there phone bills?",
    "If you cannot change your mind, are you sure you have one?",
    "Beat the 5 O'clock rush, leave work at noon!",
    "If you can't convince them, confuse them.",
    "It's not the fall that kills you. It's the sudden stop at the end.",
    "I couldn't repair your brakes, so I made your horn louder.",
    "Hot glass looks same as cold glass. - Cunino's Law of Burnt Fingers",
    "The cigarette does the smoking you are just the sucker.",
    "Someday is not a day of the week",
    "Whenever I find the key to success, someone changes the lock.",
    "To Err is human, to forgive is not a Company policy.",
    "The road to success.... Is always under construction.",
    "Alcohol doesn't solve any problems, but if you think again, neither does Milk.",
    "In order to get a Loan, you first need to prove that you don't need it.",
    "Why do ghosts wear pants?",
    "There’s no kill switch on awesome.",
    "Never mind. My phone took care of it.",
    "Did you learn to debate on the Internet?",
    "Self-respect is like a prison for the soul.",
    "Goals are a form of self-inflicted slavery.",
    "I’m not lazy, I’m useless. There’s a big difference.",
    "With any luck, your soul mate won’t be perceptive.",
    "I can no longer resist the urge to text while you talk.",
    "You might want to pick a defense that’s less checkable.",
    "I’m toying with the idea of becoming a useful member of society.",
    "I tried to read your email but the signal-to-noise ratio was too low.",
    "I’ve decided to be more aggressive in blaming others for my lack of success."
   );

    $quote = $quote_array[mt_rand(0, count($quote_array) - 1)]; // Mersenne Twister

?><!DOCTYPE html>
<html>
    <head>
        <title>Gregory Coleman</title>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1"><!-- mobile first -->
        <link href="https://bootswatch.com/cerulean/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <h1>Gregory Coleman</h1>  

            <div class="panel panel-primary">
                <div class="panel-heading">Quote</div>
                <div class="panel-body">
                    <?php echo $quote  ; ?>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">About Me</div>
                <div class="panel-body">
                <p>I am a pretty normal person. I like to travel, eat really good food and spend time with nice people. Originally from the midwest, I have lived all over the country. Currently living outside the country but will return soon.</p>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">El Photo</div>
                <div class="panel-body">
                <img width = 200 src="images/ExtensionFlag.png" alt="Extension Flag">
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">7 Things About Me</div>
                <div class="panel-body">
                    <ul>
                    <li>I will spend most of the year in Taipei (台北，台灣).</li>
                    <li>I work in San Francisco.</li>
                    <li>I speak English, Chinese and enough French to embarrass myself.</li>
                    <li>I eat my Chili with Beans.</li>
                    <li>I think Sean Connery was the Best Bond.</li>
                    <li>I believe prime numbers are actually just anti social.</li>
                    <li>I will share my location but not my momentum.</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>
