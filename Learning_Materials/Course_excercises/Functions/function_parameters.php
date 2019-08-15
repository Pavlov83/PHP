<?php

function add(){

$total = 0;
foreach(func_get_args as $arg){   //built-in function func_get_args takes
                                  // all arguments
  $total += (int)$arg;

 }

 return $total;

}

add(5, 10, 1);


 ?>
