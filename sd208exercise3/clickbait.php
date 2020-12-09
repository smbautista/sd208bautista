<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CLICKBAIT</title>
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
     <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> -->
     <link href='https://fonts.googleapis.com/css?family=Chicle' rel='stylesheet'>
    <style>
    body{
        background-image:url("background.png");
        background-size:cover;
        background-repeat:no-repeat;
        margin: 10px;
        font-family: "Chicle";
        font-size: 22px;
        }
    </style> 
</head>
<body>
    <?php
     define("TITLE", "Honest Click Bait Headlines");
    if(isset($_POST["fixSubmit"])) {
        /* Grab value from textarea is $_POST collection, make all letters lowercase using strtolower() function store in a variable*/
        $clickBait = strtolower($_POST["clickBaitHeadline"]);
        
        //store array of clickbait-sounding words or phrases
        $clickBait_words = array("scientists", "doctors", "hate", "stupid", "weird", "simple", "trick", "shocked me", "you'll never believe", "hack", "epic", "unbelievable");
        
        /* Strore array of replacement words or phrases make sure each replacement is in the same order as the clickbait word you're trying to replace */
        $replacement_words = array("so-called scientists", "so-called doctors", "aren't threatened by", "average", "completeky normal", "ineffective", "method", "is no different than the others", "you won't really be surprised by", "slightly improve", "boring", "normal");
        
        /* Use the str_replace() function to replace the words uppercase the first letter in every word using ucwords() function store in a variable */
        $honestHeadline = str_replace(  $clickBait_words, $replacement_words, $clickBait);
    }
    ?>
<div class="container" style="padding-left:20%">
            <h1 style="margin-left:11%"> <?php echo TITLE; ?></h1>
            <p class="lead" style ="margin-left: 20%">You can type a sentence here.</p>
            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea class="form-control input-lg" name="clickBaitHeadline">
                    </textarea>
                    <br>
                    <button type="submit" class="btn btn-outline-dark btn-lg pull-right" style="margin-left:35%" name="fixSubmit">Make Honest!</button>
                </form>
            </div>
            </br>
            <?php 
                if(isset($_POST["fixSubmit"])) {
                    /* Use ucwords() function to uppercase first letter in every word, echo the variable on the screen */
                    echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($clickBait)."</h4><hr>";   
                    
                    //echo the honest headline
                    echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($honestHeadline)."</h4>";   
                }
            ?>
        </div>
        <!-- Bootstrap JS -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</body>
</html>