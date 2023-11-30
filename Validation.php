<?php 

class Validation {

    private static $test;

    # Static permet de dire on peut utiliser ces classes sas passer par la création d'objet (news)
    public static function validateString(string $string) {
        if (!preg_match("/^[A-Z]+/i", $string)) {
            throw new Exception("La marque renseignée est incorrect");
        }
        echo Validation::$test;
    }

    public static function validateRegistration(string $string) {
        if (!preg_match("/^[A-Z]{2}[-][0-9]{3}[-][A-Z]/", $string)) {
            throw new Exception("L'immatriculation renseignée est incorrecte");
        }
    }

    public static function validateStringInt(string $string) {
        if (!preg_match("/\w+/", $string)) {
            throw new Exception("Le modèle renseigné est incorrect");
        }
    }

    public static function validateInt (int $int) {
        if (!preg_match("/^[0-9]+$/", $int)) {
            throw new Exception("La puissance renseignée est incorrect");
        }
    }
}