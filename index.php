<?php
require ('animal.php');
require ('Ape.php');
require ('Frog.php');

$sheep = new Animal('shaun', 2, 'false');

echo 'namanya ' . $sheep->get_name() . '<br>'; // "shaun"
echo 'kakinya ' . $sheep->get_legs() . '<br>'; // 2
echo 'cold blood ' . $sheep->get_cold_blooded() . '<br>' ; // false

echo '<br>';

$sungokong = new Ape("kera sakti", 2, 'false');
echo 'namanya ' . $sungokong->get_name() . '<br>'; //
echo 'kakinya ' . $sungokong->get_legs() . '<br>'; //
echo 'cold blood ' . $sungokong->get_cold_blooded() . '<br>'; //
echo ' yel yelnya ' . $sungokong->get_yell() . '<br>'; // "Auooo"

echo '<br>';

$kodok = new Frog("buduk", 4, 'true');
echo 'namanya ' . $kodok->get_name() . '<br>' ;
echo 'kakinya ' . $kodok->get_legs()  . '<br>';
echo 'cold blood ' . $kodok->get_cold_blooded()  . '<br>';
echo ' jumpnya ' . $kodok->get_jump() ; // "hop hop"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>