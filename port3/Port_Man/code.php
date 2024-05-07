<?php
session_start();

include('dbconn.php');

if (isset($_POST['save_container_btn'])) {
    $container_id = $_POST['Container_id'];
    $conts = $_POST['Contents'];
    $orig = $_POST['Origin'];
    $cont_i_e = $_POST['Container_Import_Export'];
    $brro = $_POST['Brrowing_Company'];
    $leas = $_POST['Leasing_Company'];
    $weigh = $_POST['Weight_of_Conatiner'];

    $query = "INSERT INTO container (Container_id, ontents, Origin, Container_Import_Export, Borrowing_Company, Leasing_Company, Weight_Of_Container) 
                VALUES (:container_id, :conts, :orig, :cont_i_e, :brro, :leas, :weigh)";
    $query_run = $conn->prepare($query);

    $data = [
        ':container_id' => $container_id,
        ':conts' =>  $conts,
        ':orig' => $orig,
        ':cont_i_e' => $cont_i_e,
        ':brro' => $brro,
        ':leas' => $leas,
        ':weigh' => $weigh,
    ];
    $query_execute = $query_run->execute($data);

    // if ($query_execute) {
    //     $_SESSION['message'] = "Container Details Inserted Successfully";
    //     header('Location: index.php');
    //     exit(0);
    // } else {
    //     $_SESSION['message'] = "Not Inserted Successfully";
    //     header('Location: index.php');
    //     exit(0);
    // }
}
