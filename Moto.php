<?php 

class Moto extends Vehicule {
    use Rechargeable;
    private string $_registration;

    public function __construct(
        string $brand, 
        string $model, 
        int $power, 
        int $wheel, 
        string $registration, 
        int $position = 0,
        int $battery = 0) 
    {
        parent::__construct($brand, $model, $power, $wheel, $position);
        $this->setRegistration($registration);
        $this->setBattery($battery);
    }

    public function setRegistration($registration): self 
    {
        validation::validateRegistration($registration);
        $this->_registration = $registration;
        return $this;
    }
}