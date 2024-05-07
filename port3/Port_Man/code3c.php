<?php
session_start();

include('dbconn.php');

if (isset($_POST['save_country_btn'])) {
    $port_n = $_POST['port_name'];
    $port_l = $_POST['port_location'];
    $count = $_POST['country_name'];
    $city = $_POST['city_name'];



    $query = "INSERT INTO country (port_name, port_location, country_name, city_name) VALUES (:port_n, :port_l, :count, :city)";
    $query_run = $conn->prepare($query);

    $data = [
        ':port_n' => $port_n,
        ':port_l' =>  $port_l,
        ':count' => $count,
        ':city' => $city
    ];
    $query_execute = $query_run->execute($data);

    // if ($query_execute) {
    //     $_SESSION['message'] = "Country Details Inserted Successfully";
    //     header('Location: index3.php');
    //     exit(0);
    // } else {
    //     $_SESSION['message'] = "Not Inserted Successfully";
    //     header('Location: index3.php');
    //     exit(0);
    // }
}
