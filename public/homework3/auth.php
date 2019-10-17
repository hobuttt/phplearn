<?php
function auth(string $getLogin, string $getPassword) {
    $users = require './bd/logins.php';
    foreach ($users as $user) {
        if($user['login'] == $getLogin && $user['password'] == $getPassword) {
            return true;
        }
    }
}

function getUserLogin(): ?string {
    $loginFromCookie = $_COOKIE['login'] ?? '';
    $passwordFromCookie = $_COOKIE['password'] ?? '';

    if (auth($loginFromCookie, $passwordFromCookie)) {
        return $loginFromCookie;
    }

    return null;
}
