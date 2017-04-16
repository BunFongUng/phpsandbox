<?php

class Assignment {
    public $name = null, $age = 0, $hour = 0;
    const HOURPERDAY = 24;

    public function __construct($name, $age, $hour) {
        $this->name = $name;
        $this->age = $age;
        $this->hour = $hour;
    }  

    public function calculateSleptYear() {
        return ($this->age * $this->hour) / self::HOURPERDAY;
    }

    public function displayMessage() {
        echo "<p>hey $this->name you have slept " . $this->calculateSleptYear() . " of your life away!</p>";
    }
}