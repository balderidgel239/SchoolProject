<?php
// This is an example PHP code for generating a random string.
// The length of the generated string can be adjusted by changing the value in $length.

function getRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

// Example usage:
$randomLength = 8;
echo "Random String: " . getRandomString($randomLength);
