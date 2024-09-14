<?php

class cow{
    function sound(){
        echo "Cow sound : Moo"."<br>";
    } 
}

class calf extends cow{
    function sound(){
        echo "Calf Sound : Moo";
    }
}

$animal = new cow ();
$animal->sound();

$animal2 = new calf ();
$animal2->sound();