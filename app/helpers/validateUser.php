<?php

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, "Username is required!");
    }
    if (empty($user['email'])) {
        array_push($errors, "Email is required!");
    }
    if (empty($user['password'])) {
        array_push($errors, "Password is required!");
    }
    if (empty($user['passwordConf'])) {
        array_push($errors, "Please confirm your password!");
    }
    if ($_POST['password'] !== $user['passwordConf']) {
        array_push($errors, "Passwords do not match!");
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if (isset($existingUser)) {
        array_push($errors, 'Email is already taken');
    }

    return $errors;
}
function validateLogin($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, "Username is required!");
    }
    if (empty($user['password'])) {
        array_push($errors, "Password is required!");
    }

    return $errors;
}