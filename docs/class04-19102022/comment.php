<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // single line comment
    # php comment
    /* multiline comment */
    $a = "bangladesh";
    echo gettype($a) . " : " . $a;
    $b = false;
    echo "<br>";
    echo gettype($b). " : ". $b;
    echo "<br>";
    printf("%d",$b);
    echo "<br>";
    $agree = "0";
    echo $agree;
    echo "<br>";
    //type juggling
    if($agree){
        echo "You agreed<br>";
    }
    else{
        echo "You disagreed<br>";
    }
    $n = 0b111;
    $nn = 0xff;
    $fl = 1.2e5;
    echo "<br>";
    echo $n;
    echo "<br>";
    echo $nn;
    echo "<br>";
    echo $fl;
    echo "<br>\n";
    // $str = "PHP is a \"great\" language$nn";
    $str = 'PHP is a "great" language$nn';
    echo $str;
    echo "<br>";
    //type casting
    $a = "123";
$b = "456";
echo $a + $b . "\n";//type juggling
echo $a . $b . "\n";
    


    ?>
</body>
</html>