<?php

class ClassProperty {
    public $mySalary = 400;
    const SPEN = 50; 

    public function calculateAmount() {
        return ($this->mySalary - self::SPEN) * 12; 
    }
}