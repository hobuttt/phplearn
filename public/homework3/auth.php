<?php
    $login = 'root';
    $password = 'admin';
    function auth($getLogin, $getPassword) {
        if ($getLogin === $login && $getPassword === $password) {
            return true;
        }
    }
