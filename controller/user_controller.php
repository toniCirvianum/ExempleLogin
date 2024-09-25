<?php

function userExists ($username) {
    foreach ($_SESSION['users'] as $user) {
        if ($username == $user['username']) {
            return true;
        }
    }
    return false;
}

function credentialsOk($username,$password) {
    foreach ($_SESSION['users'] as $user) {
        if ($username == $user['username'] && $password=$user['password']) {
            return true;
        }
    }
    return false;
}

function getUserByName ($username) {
    foreach ($_SESSION['users'] as $user) {
        if ($username == $user['username']) {
            return $user;
        }
    } 
}

function getLastId() {
    $lastUser = end($_SESSION['users']);
    return $lastUser['id'];
}

?>