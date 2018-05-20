/*

Variables can store different datatypes.In PHP all available datatypes are:

String
Integer
Float
Boolean
Array
Object
NULL
Resource
             */

<?php

$x = "Hello World!";
$y = "Hello Moon";

echo $x;
echo "<br>";
echo $y;
?>
                    ####### Integer#########
<?php
$x = 60009;
var_dump($x); #var_dump returns the value and datatype of the variable
?>

                     ####### Float #######

<?php
$x = 10.365;
var_dump($x);
?>
                    ####### Boolean ######

<?php

$x = true;
$y = false;
?>
                        #### Array ####

<?php
$cars = array("Volvo","Bmw","Audi");
var_dump($cars);
?>
                         ###Object###
<?php
class Car{
  function Car(){
    $this->model = "VW";
  }
}

//create an Object
$herbie = new Car();

//show object properties
echo $herbie -> model;

?>

                       #### Null Value ###

//A variable of datatype null is a variable that has no value assigned to it.
<?php

$x = "Hello World";
$x = null;
var_dump($x);

?>
