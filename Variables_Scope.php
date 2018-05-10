      ##### There are three types of Variables_Scope #####

      local
      global
      static

/* A variable declared outside a function has a GLOBAL SCOPE and can be accesed
only outside a function */

<?php

$x = 5;//global scope

function myTest(){

    //using x inside this function will generate an error
    echo"<p>Variable x inside function is: $x</p>";

}

myTest();

echo"<p>Variable x outside function is: $x</p>";


/* The 'global' keyword is used to access global variable from within a
function.To do this, use the global keyword before the variables(inside the
function): */

$x = 5;
$y = 10;

function myTest(){
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15

?>

/* this can be rewritten like :


$x = 5;
$y = 8;

function myTest(){
$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $

####### The Static keyword ####

<?php

function myTest(){
  static $x = 0;
  echo $x;
  $x++;
}
myTest();
myTest();
myTest();

 ?>
