<?php
class Coder {
}

class Developer extends Coder {
}

$dev   = new Developer;
$coder = new Coder;

$dev instanceof Coder && print "Dev is a Coder";
$dev instanceof Developer && print "Dev is a Developer";
$coder instanceof Coder && print "Coder is a Coder";
$coder instanceof Developer || print "Coder is not a Developer";

//class Developer {
    //public function sayHi() {
        //print "Hi";
    //}

    //private function revealSecret() {
        //print "I code in MS Word";
    //}
//}
//class Developer {
    //function __construct() {
        //print "Hello, world!";
    //}

    //function code() {
    //}
//}
