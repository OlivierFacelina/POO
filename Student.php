<?php
 
class Student implements UserInterface
{
    private $_first_name;
    private $_last_name;
    private $_address;
    public function __construct(
        string $first_name,
        string $last_name,
        string $address
    ) {
        $this->setFirstname($first_name);
        $this->setLastname($last_name);
        $this->_address = $address;
    }
 
    public function setFirstname(string $first_name)
    {
        $this->validateString($first_name);
        $this->_first_name = $first_name;
        return $this;
    }
    public function setLastname(string $last_name)
    {
        $this->validateString($last_name);
        $this->_last_name = $last_name;
        return $this;
    }
 
    public function greeting()
    {
        echo sprintf("Bonjour %s", $this->_first_name);
    }
 
    private function validateString(string $string)
    {
        if (!preg_match("/^[A-Za-z]+$/", $string)) {
            throw new Exception("Le nom renseigné est incorrect");
        }
    }
 
    public function __get($name) {
        if(property_exists($this, $name)) {
            echo $this->$name;
        }
    }
 
    public function __toString() {
        return $this->_first_name ." ". $this->_last_name ." ". $this->_address;
    }
    public function login($username,$password) {}
    public function logout() {}
    public function me() {}
}