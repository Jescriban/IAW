<?php

//define("MAXSIZE", 100);
const MAXSIZE=99;
echo MAXSIZE." / ";
echo constant("MAXSIZE"); // same thing as the previous line

/*
interface bar {
    const test = 'foobar!';
}

class foo {
    const test = 'foobar!';
}

$const = 'test';

var_dump(constant('bar::'. $const)); // string(7) "foobar!"
var_dump(constant('foo::'. $const)); // string(7) "foobar!"

?>
 * */
 