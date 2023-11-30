<?php

interface UserInterface {
    public function login($username, $password);
    public function logout();

    public function me();
}