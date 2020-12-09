<?php
    session_start();
    $book  = (isset($_SESSION['input'])) ? $_SESSION['input']:array();//ternary operation to check the input session
    
    if(isset($_POST['add'])){
        if(!empty($_POST["bookmarkname"]) && !empty($_POST["bookmarkUrl"])){
            array_push($book, [$_POST['bookmarkname'] ,$_POST['bookmarkUrl']]);
            $_SESSION['input'] = $book;
        }
    }

    if(isset( $_POST['clear_button'])){
        $_SESSION['input'] = [];
    }
    if(isset($_POST['x'])){
        array_splice($_SESSION['input'], $_POST['id'], 1);
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
    <title>Bookmark</title>
    <style>
        body {
            background-image: url("pile.jpg");
            /* opacity:0.5; */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Bangers';

        }

        .form {
            margin-top: 50px;
            margin-left: 60%;
            border: ridge 5px deeppink;
            background-color: pink;
            padding: 50px;
            width: 200px;
        }

        label {
            font-size: 30px;
        }

        .result {
            margin-top: 3%;

        }


        ul {
            list-style-type: none;
            display: block;
        }

        ul li {
            display: inline-block;
            overflow-y: auto;
        }

        .result {
            max-height: 250px;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <div class="form">
        <form action="./bookmark.php" method="POST">
            <label for="bookmark">Bookmark Name</label><br>
            <input type="text" style="padding:7px" id="bookmarkName" name="bookmarkname"><br>
            <label for="url">URL </label><br>
            <input type="text" style="padding:7px" id="url" name="bookmarkUrl"><br> <br>
            <input type="submit" style="padding:5px" value="Add Bookmark" name="add">
            <input type="submit" style="padding:5px" name="clear_button" value="Clear">
        </form>
        <div class="result">
            <?php if(isset($_SESSION['input'])):?>
            <?php for($id= 0; $id < count($_SESSION['input']); $id++):?>
            <ul>
                <li>
                    <a href='<?php echo $_SESSION['input'][$id][1];?>' target="_blank">
                        <?php echo $_SESSION['input'][$id][0];?> </a>
                </li>
                <li>
                    <form action="bookmark.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input class="x" name="x" type="submit" value="X">
                    </form>
                </li>
            </ul>
            <?php endfor?>
            <?php endif?>
        </div>
    </div>
</body>
</html>