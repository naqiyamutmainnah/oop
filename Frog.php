<?php
require_once ('animal.php');
class Frog extends Animal{
    public function get_jump(){
        echo 'hop hop';
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