<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Toturial</title>
    <style>
        .container{
            border: 2px solid red;
            background-color:gainsboro;
            width: 400px;
            margin: auto;
            padding: 20px;
            padding-left: 30px;
        }
        .arr{
            border: 2px solid red;
            background-color:rgb(123, 246, 242);
            width: 400px;
            margin: auto;
            padding: 20px;
            padding-left: 30px;
            margin-top: 20px;
        }
        .loop{
            border: 2px solid red;
            background-color:rgb(123, 246, 242);
            width: 400px;
            margin: auto;
            padding: 20px;
            padding-left: 30px;
            margin-top: 20px;
        }
        .func{
            border: 2px solid red;
            background-color:rgb(123, 246, 242);
            width: 400px;
            margin: auto;
            padding: 20px;
            padding-left: 30px;
            margin-top: 20px;
        }
        .string{
            border: 2px solid red;
            background-color:rgb(123, 246, 242);
            width: 400px;
            margin: auto;
            padding: 20px;
            padding-left: 30px;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>This is A Div !!.</h1>
        <?php
        $age=21;
        if($age>18)
        {
            echo "You are above 18";
        }
        elseif($age==18)
        {
            echo "You are 18";
        }
        else
        {
            echo "You are below 18";
        }
        ?>
    </div>
    <div class="arr">
        <h1>Array is: </h1>
        <?php
        $languages=array("C", "C++", "Python", "PHP", "Java");
        echo $languages[3];
        echo "<br>";
        echo $languages[2];
        echo "<br>";
        echo $languages[4];
        echo "<br>";
        echo $languages[0];
        echo "<br>";
        echo $languages[1];
        echo "<br>";
        echo "Number of items: ";
        echo count($languages);
        echo "<br>";
        //using loop
        $a=0;
        while($a<count($languages))
        {
            echo $languages[$a];
            echo "<br>";
            $a++;
        }
        ?>
    </div>
    <div class="loop">
    <h1>Loop in PHP</h1>
    <?php
    echo "<h3>While loop: </h3>";
    echo "<br>";
    $a=0;
    while($a<5)
    {
        echo "Num is: ";
        echo $a;
        echo "<br>";
        $a++;
    }
    echo "<h3>For loop: </h3>";
    echo "<br>";
    for ($a=0; $a < 5; $a++) { 
        echo "Num is: ";
        echo $a;
        echo "<br>";
    }
    ?>
    </div>
    <div class="func">
        <h1>Functions in PHP</h1>
        <?php
        function print_num($number)
        {
            echo "Your Number is: ";
            echo $number;
            echo "<br>";
        }
        print_num(10);
        print_num(45);
        print_num(105);
        ?>
    </div>
    <div class="string">
        <h1>Strings in PHP</h1>
        <?php
        $str= "My name is Akash";
        $len=strlen($str);
        echo "Length of the string is: ".$len;
        echo "<br>";
        echo "words present in the string is: ". str_word_count($str);
        echo "<br>";
        echo "Reverse string is: ". strrev($str);
        echo "<br>";
        echo "Find position in the string is: ". strpos($str, "Aka");
        echo "<br>";
        echo "The replace string is: ". str_replace("is", "was", $str);
        echo "<br>";
        ?>
    </div>
</body>
</html>