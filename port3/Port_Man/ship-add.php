<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ship Data</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Ship Details
                            <a href="ship-add.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="code2s.php" method="POST">
                            <div class="mb-3">
                                <label>Ship_id</label>
                                <input type="number" name="ship_id" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>Ship_Name</label>
                                <input type="text" name="ship_name" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>Capacity_Of_Ship</label>
                                <input type="number" name="capacity_of_ship" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>Arrival_Departure</label>
                                <input type="text" name="arrival_departure" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>Weight_Of_Ship</label>
                                <input type="number" name="weight_of_ship" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_ship_btn" class="btn btn-primary">Save Ship</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>