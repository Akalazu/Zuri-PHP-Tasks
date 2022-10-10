<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['username'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $user_details = $name . ', ' . $email . ', ' . $date . ', ' . $gender . ', ' . $country . "\n";
    $file = fopen('./userdata.csv', 'a+');

    if (fwrite($file, $user_details)) {
        echo '<pre>';
        print_r($user_details);
        echo '</pre>';
    };
}
