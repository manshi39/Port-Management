<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "port_management";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Fetch data from the database
  $stmt = $conn->query("SELECT * FROM ship");
  $shipData = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
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
            <h3>Ship Details
              <a href="Port_Man/ship-add.php" class="btn btn-primary float-end">Add Ship Details</a>
            </h3>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Ship ID</th>
                  <th>Ship Name</th>
                  <th>Capacity</th>
                  <th>Arrival/Departure</th>
                  <th>Weight_Of_Ship</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($shipData as $ship) : ?>
                  <tr>
                    <td><?= $ship['Ship_id']; ?></td>
                    <td><?= $ship['Ship_Name']; ?></td>
                    <td><?= $ship['Capacity_Of_Ship']; ?></td>
                    <td><?= $ship['Arrival_Departure']; ?></td>
                    <td><?= $ship['Weight_Of_Ship']; ?></td>
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