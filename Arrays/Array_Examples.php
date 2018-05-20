<?php

$customer = array('Name' => $usersName,
'Street' => $streetAddress,'City'=>$cityAddress);

foreach($customer as $key => $value){

    echo $key . ' : ' . $value;

}

##### We can add to arrays ####

$bestFriends = array('Joy', 'Willow', 'Ivy');

$bestFriends[4] = 'Steve';

$bestFriends = $bestFriends + $customer;


 ?>
