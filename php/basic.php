<?php
function sq($n){return $n*$n;}
echo "hello from php";
echo "now time is:". date("Y-m-d H:i:s a");
?>
<!-- html comment -->
<h3>Welcome!</h3>
<?php
// single line comment
 /*  multiline comment*/
 # single line comment
 echo "<p>Some dynamic output here</p>";
?>
<br>
<p>Some static output here</p>
<?php
$title = "<h1>Outputting content</h1>";
 $body = "<p>The content of the paragraph...</p>";
 echo $title . "<hr>" .  $body;
 echo "<br>";
 $a = 5;
 echo "$a _abc<br/>";
 echo "{$a}_abc<br/>";
 echo '$a _abc<br/>';
 prinT("class ends");
 echo "<br>";
 echo SQ(5);
?>