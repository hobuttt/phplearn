<?php
    $login = 'root';
    $password = 'admin';
    function auth($getLogin, $getPassword, $login, $password) {
        var_dump($getLogin, $getPassword, $login, $password);
        if ($getLogin === $login && $getPassword === $password) {
            return true;
        }
    }
