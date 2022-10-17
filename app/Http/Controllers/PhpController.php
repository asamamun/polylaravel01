<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpController extends Controller
{
    public function index(){
        echo "hello";
    }
    public function text(){
        print "test<br>";
        $a = "dhaka";
        printf("My town name is : %s\n", $a);
        echo "<br>";
        $b = "50.9";
        printf("The amount is : %d\n<br>", $b);
        printf("The amount is : %.2f\n<br>", $b);
        echo floor($b); echo "<br>";
        echo ceil($b); echo "<br>";
        echo round($b); echo "<br>";
        echo gettype($b); echo "<br>";
        $c = (int) $b; //type casting
        $aa = (int) $a;       
        echo gettype($c); echo "<br>";
        echo gettype($aa) . " : ". $aa; echo "<br>";
        echo "php conf file name is : php.ini";
        echo " and apache conf file name is : httpd.conf and .htaccess<br>";
        echo date('Y-M-d H:i:s');

    }
    public function add(){
       return view('php.add');
        
    }
}
