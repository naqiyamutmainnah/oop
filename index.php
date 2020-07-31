<?php
require_once ('animal.php');

$sheep = new Animal('shaun', 2, 'false');

echo 'namanya ' . $sheep->get_name() . '<br>'; // "shaun"
echo 'kakinya ' . $sheep->get_legs() . '<br>'; // 2
echo 'cold blood ' . $sheep->get_cold_blooded() ; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>