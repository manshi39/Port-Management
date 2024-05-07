<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Container Data </title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Container Details
                            <a href="container-add.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>Container_id</label>
                                <input type="number" name="container_id" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>Contents</label>
                                <input type="text" name="contents" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>Origin</label>
                                <input type="text" name="origin" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>Container_Import_Export</label>
                                <input type="text" name="container_import_export" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>Brrowing_Company</label>
                                <input type="text" name="brrowing_company" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>Leasing_Company</label>
                                <input type="text" name="leasing_company" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>Weight_Of_Container</label>
                                <input type="number" name="weight_of_conatiner" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_container_btn" class="btn btn-primary">Save Container</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>