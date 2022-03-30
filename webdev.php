<html>

<head>
    <!-- title of code -->
    <title>webdev</title>
    <style>
    /* to put background of page */
    html {
        background-image: url('img/tiger.jfif');
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    </style>
</head>

</html>
<!-- tag php -->
<?php
// define var
$r;
// to print the round number of a dice
echo "throwing a Dice five times: <br>";
echo "1) " . (rand(1,6)) . "<br>";
echo "1) " . (rand(1,6)) . "<br>";
echo "1) " . (rand(1,6)) . "<br>";
echo "1) " . (rand(1,6)) . "<br>";
echo "1) " . (rand(1,6)) . "<br>";

?>

<html>

<head>
    <style>
    label {
        font-size: 15px;
    }

    textarea {
        background-color: rgb(248, 242, 234);
    }
    a:hover{
        color:red;
    }
    </style>
</head>

<body>
    <!-- choose favorites food  -->
    <p> favorites food:</p>
    <!-- order list -->
    <ol>
        <li> <a href="img/pizza.jfif">pizza</a></li>
        <li><a href="img/burger.jfif">burger</a></li>
        <li><a href="img/mansaf.jfif">mansaf</a></li>
        <li><a href="img/donuts.jfif">donuts</a></li>
        <li><a href="img/kabseh.jfif">kabseh</a></li>
        <li><a href="img/maghloba.jfif">maghloba</a></li>
    </ol>
<!-- new line -->
    <br><br><br>
<!-- name of box in label tag -->
    <label>Feedback:</label>
    <br>
    <!-- textarea tag to put any nots -->
    <textarea name="" id="" cols="50" rows="8" placeholder="feedback"> </textarea>

    <br><br>
    <!-- link to go to top page i use icon just for more define -->
    <p>click here to go to the top of the page <a href="">&#9195</a></p>
    
    <br>
<!-- link to go to another page -->
    <p> click here to <a href="registration.html">registration</a></p>
    
    
</body>

</html>