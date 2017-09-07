<?php

$quote_array = array(
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
        <title>John Gosier</title>
        <meta charset=utf-8>
        <link href="https://bootswatch.com/cerulean/bootstrap.min.css" rel="stylesheet type='text/css'">
    </head>
    <body>
        <div class="container">
            <h1>Gregory Coleman</h1>  
            <div class="panel panel-primary">
            <div class="panel-heading">A Few Things About Me</div>
            <div class="panel-body">
                
                <div class="row">
                    <div class="panel-body">
                    <ul>
                        <li>I live in Taipei most of the year.</li>
                        <li>I work in San Francisco.</li>
                        <li>I speak English, Chinese and enough French to embarrass myself.</li>
                        <li>I eat my Chili with Beans.</li>
                        <li>I think Sean Connery was the Best Bond.</li>
                        <li>I believe prime numbers are actually just anti social.</li>
                        <li>I will share my location but not my momentum.</li>
                    </ul>
                    </div></div>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">Quote</div>
                <div class="panel-body">
                    <?php echo $quote  ; ?>
                </div>
            </div>
        </div>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>
