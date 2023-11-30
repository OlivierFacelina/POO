<?php 

abstract class Vehicule {
    protected string $_brand;
    protected string $_model;
    protected int $_power;
    protected int $_wheel;
    protected int $_position;
    
    public function __construct(string $brand, string $model, int $power, int $wheel, int $position = 0) {
        $this->setBrand($brand);
        $this->setModel($model);
        $this->setPower($power);
        $this->setWheel($wheel);
        $this->setPosition($position);

    }
        
        /**
         * Get the value of brand
         */
        public function getBrand()
        {
                return $this->_brand;
        }

        /**
         * Set the value of brand
         */
        public function setBrand($brand): self
        {
                $this->validateString($brand);
                $this->_brand = $brand;
                return $this;
        }

        /**
         * Get the value of model
         */
        public function getModel()
        {
                return $this->_model;
        }

        /**
         * Set the value of model
         */
        public function setModel($model): self
        {
                validation::validateString($model);
                $this->_model = $model;

                return $this;
        }

        /**
         * Get the value of power
         */
        public function getPower()
        {
                return $this->_power;
        }

        /**
         * Set the value of power
         */
        public function setPower($power): self
        {
                $this->validateInt($power);
                $this->_power = $power;

                return $this;
        }

        private function validateString(string $string) {
            if (!preg_match("/^[A-Z]+/i", $string)) {
                throw new Exception("La marque renseignée est incorrect");
            }
        }

        protected function validateRegistration(string $string) {
            if (!preg_match("/^[A-Z]{2}[-][0-9]{3}[-][A-Z]/", $string)) {
                throw new Exception("L'immatriculation renseignée est incorrecte");
            }
        }

        private function validateStringInt(string $string) {
            if (!preg_match("/\w+/", $string)) {
                throw new Exception("Le modèle renseigné est incorrect");
            }
        }

        private function validateInt (int $int) {
            if (!preg_match("/^[0-9]+$/", $int)) {
                throw new Exception("La puissance renseignée est incorrect");
            }
        }

        public function __get($name) {
            if(property_exists($this, $name)) {
                echo $this->$name;
            }
        }

        public function __toString() {
            return $this->_brand ." ". $this->_model ." " . $this->_power;
        }
        
        
    /**
     * Get the value of wheel
     *
     * @return int
     */
    public function getWheel(): int
    {
        return $this->_wheel;
    }

    /**
     * Set the value of wheel
     *
     * @param int $wheel
     *
     * @return self
     */
    public function setWheel(int $wheel): self
    {
        if(is_int($wheel) && $wheel > 0) {
         $this->_wheel = $wheel;
        }
        return $this;
    }

    /**
     * Get the value of position
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->_position;
    }

    /**
     * Set the value of position
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition($position): self
    {
        if(is_int($position) && $position >= 0) {
            $this->_position = $position;
        }
        return $this;
    }
    
    public function forward(): self 
    {
        $this->_position  += 1;

        return $this;
    }

    public function back(int $position): self 
    {
        $this->_position -= 1;

        return $this;
    }

}