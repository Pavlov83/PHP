<?php

function append($initial){

  $result = func_get_arg(0);
  foreach(func_get_args() as $key => $value){
    if($key >=1){
      $result .= ' ' .$value;
    }
  }

  return $result;

}


echo append('Pavel','Pavlov');


 ?>
