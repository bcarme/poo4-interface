<?php

namespace App;

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOff(){
        echo "off";
        return false;
            }

    public function switchOn(){
        if ($this->getCurrentSpeed() > 10){
            echo "on";
            return true;
        }


    }
}