<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Toturial</title>
</head>
<body>
    <div class="container">
        This id my !st PHP Program.<br>

    <?php
    echo "Hello World!! <br>";
    echo "<h3>Variables</h3> <br>";
    $a=10;
    $b=3;
    
    echo "<h3><pre>Arathmetic Operator</pre></h3> <br>";
    $sum= $a + $b;
    echo "Sum is: ";
    echo $sum;
    echo "<br>";

    $sub1= $a-$b;
    echo "Substruction1 is: ";
    echo $sub1;
    echo "<br>";

    $sub2=$b-$a;
    echo "Substruction2 is: ";
    echo $sub2;
    echo "<br>";

    $multi=$a*$b;
    echo "Multiplication is: ";
    echo $multi;
    echo "<br>";

    $div=$a/$b;
    echo "Divition is: ";
    echo $div;
    echo "<br>";

    echo "<h3><pre>Increment/Decrement Operator</pre></h3> <br>";

    $new=$a;
    $new++;
    echo "Increment operator is: <br>";
    echo $new;
    echo "<br>";
    $n=$b;
    $n--;
    echo "Decrement operator is: <br>";
    echo $n;
    echo "<br>";
    echo "<h3><pre>Comparisn Operator</pre></h3> <br>";
    echo "Value of 1=4 is: ";
    echo var_dump(1==4);
    echo "<br>";
    echo "Value of 1!=4 is: ";
    echo var_dump(1!=4);
    echo "<br>";
    echo "Value of 1<=4 is: ";
    echo var_dump(1<=4);
    echo "<br>";
    echo "Value of 1>=4 is: ";
    echo var_dump(1>=4);
    echo "<br>";
    echo "<h3><pre>Logical Operator</pre></h3> <br>";

    $myvar= (false) && (true);
    echo "<br>";
    echo var_dump($myvar)
    ?>
    <?php
    define('pi',3.14);
    /*

    Data Types
    1. intiger.
    2. string.
    3. array.
    4. float.
    5. boolean.
    6. object.

    */

    echo "<br>";
    echo "Data types<br>";
    $var= "This is a String";
    echo $var;
    echo "<br>";
    echo var_dump($var);
    echo "<br>";
    $var =63;
    echo var_dump($var);
    echo "<br>";
    $var =63.11;
    echo var_dump($var);
    echo "<br>";
    echo "value of pi is: ";
    echo pi;
    echo "<br>";
    ?>
    </div>
</body>
</html>