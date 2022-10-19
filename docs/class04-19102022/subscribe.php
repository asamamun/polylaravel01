<?php
$e = $_POST['email'];
$p = $_POST['pswd'];

$fh = fopen("userinfo.txt","at");
$line = $e."|".$p."|\n";

fwrite($fh,$line);
fclose($fh);
echo "thanks";
// header("Location:form.html");