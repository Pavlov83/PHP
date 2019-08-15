<?php

$customers = array(array('Paul','123Main','15212'),
                   array('Radi', '124Main','14356'),
                   array('World','Audio','Programming')
                 );
//Cycle trough multidimensional arrays

for($row = 0;$row < 3; $row++){

    for($col = 0; $col < 3; $col++){
      echo $customers[$row][$col] . ',';
    }


}

/* Common Array Functions
  sort($yourArray): Sorts in ascending asphabetical order or you can add
   SORT_NUMERIC or SORT_STRING

   asort($yourArray):sorts arrays with keys
   ksort($yourArray):sorts by the key
   you can reverse those examples by putting r before them 
