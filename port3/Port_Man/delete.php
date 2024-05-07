<?php
session_start();
$host = "localhost";
$dbname = "port_management";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if delete button is clicked
    if (isset($_GET['delete'])) {
        $container_id = $_GET['delete'];

        // Prepare and execute the DELETE statement
        $stmt = $conn->prepare("DELETE FROM container WHERE Container_id = :container_id");
        $stmt->bindParam(':container_id', $container_id);
        $stmt->execute();

        // Set success message
        $_SESSION['message'] = "Container details deleted successfully.";

        // Redirect to the current page
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit();
    }

    $stmt = $conn->prepare("SELECT Container_id, Contents, Origin, Container_Import_Export, Borrowing_Company, Leasing_Company, Weight_Of_Container FROM container");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Port Management</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <?php if (isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        <h3>Container Details
                            <a href="Port_Man/container-add.php" class="btn btn-primary float-end">Add Container Details</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Container ID</th>
                                    <th>Contents</th>
                                    <th>Origin</th>
                                    <th>Import/Export</th>
                                    <th>Borrowing Company</th>
                                    <th>Leasing Company</th>
                                    <th>Weight of Container</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result as $row) : ?>
                                    <tr>
                                        <td><?= $row['Container_id']; ?></td>
                                        <td><?= $row['Contents']; ?></td>
                                        <td><?= $row['Origin']; ?></td>
                                        <td><?= $row['Container_Import_Export']; ?></td>
                                        <td><?= $row['Borrowing_Company']; ?></td>
                                        <td><?= $row['Leasing_Company']; ?></td>
                                        <td><?= $row['Weight_Of_Container']; ?></td>
                                        <td>
                                            <a href="edit-container.php?id=<?= $row['Container_id']; ?>" class="btn btn-primary">Edit</a>
                                            <a href="index.php?delete=<?= $row['Container_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this container?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>