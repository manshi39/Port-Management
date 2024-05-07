<?php
session_start();

include('dbconn.php');

if (isset($_POST['save_ship_btn'])) {
    $ship_id = $_POST['ship_id'];
    $nam = $_POST['ship_name'];
    $cap = $_POST['capacity_of_ship'];
    $arr_dep = $_POST['arrival_departure'];
    $wei = $_POST['weight_of_ship'];


    $query = "INSERT INTO ship (ship_id, ship_name, capacity_of_ship, arrival_departure, weight_of_ship) VALUES (:ship_id, :nam, :cap, :arr_dep, :wei)";
    $query_run = $conn->prepare($query);

    $data = [
        ':ship_id' =>  $ship_id,
        ':nam' =>  $nam,
        ':cap' => $cap,
        ':arr_dep' => $arr_dep,
        ':wei' => $wei,

    ];
    $query_execute = $query_run->execute($data);

    // if($query_execute)
    // {
    //     $_SESSION['message'] = "Ship Details Inserted Successfully";
    //     header('Location: index2.php');
    //     exit(0);
    // }
    // else
    // {
    //     $_SESSION['message'] = "Not Inserted Successfully";
    //     header('Location: index2.php');
    //     exit(0);
    // }



}
