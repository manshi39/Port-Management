<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "port_management";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Fetch data from the database
  $stmt = $conn->query("SELECT * FROM country");
  $countryData = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
            <h3>Country Details
              <a href="Port_Man/country-add.php" class="btn btn-primary float-end">Add Country Details</a>
            </h3>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Country Id</th>
                  <th>Port Name</th>
                  <th>Port Location</th>
                  <th>Country Name</th>
                  <th>City Name</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($countryData as $country) : ?>
                  <tr>
                    <td><?= $country['country_id']; ?></td>
                    <td><?= $country['port_name']; ?></td>
                    <td><?= $country['port_location']; ?></td>
                    <td><?= $country['country_name']; ?></td>
                    <td><?= $country['city_name']; ?></td>
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