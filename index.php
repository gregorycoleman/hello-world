<?php
require("quotes.php") ;
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
