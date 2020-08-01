<?php
require_once ('animal.php');
class Ape extends Animal{
    public function get_yell(){
        echo 'Auooo' . '<br>';
    }
    public function get_name(){
        return $this->name;
    }
    public function get_legs(){
        return $this->legs;
    }
    public function get_cold_blooded(){
        return $this->cold_blooded;
    }

}
?>