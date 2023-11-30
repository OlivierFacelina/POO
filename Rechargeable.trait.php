<?php

trait Rechargeable {
    private $_battery;
    public function charge($power) {
        $this->_battery += $power;
    }

    public function setBattery($battery) {
        if(is_int($battery)) {
            $this->_battery = $battery;
        }
        return $this;
    }
}