<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Country Data</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Country Details
                            <a href="country-add.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="code3c.php" method="POST">
                            <div class="mb-3">
                                <label>Port_Name</label>
                                <input type="text" name="port_name" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>Port_Location</label>
                                <input type="text" name="port_location" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>Country_Name</label>
                                <input type="text" name="country_name" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>City_Name</label>
                                <input type="text" name="city_name" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_country_btn" class="btn btn-primary">Save Country</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>