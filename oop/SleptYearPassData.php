<?php

class SleptYearPassData {

    public $hourSleptPertNight = 7;
    public $age = 26;

    public function calculateSleptYears($hour_slept_per_night = null, $my_age = null) {
        if($hour_slept_per_night === null && $my_age === null) {
            return ($this->age * $this->hourSleptPertNight) / 24;
        } else {
            return ($my_age * $hour_slept_per_night) / 24;
        }
    }
}