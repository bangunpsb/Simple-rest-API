<?php
// connect url rest api
$databaru = file_get_contents("http://localhost/project-simple/api-test/crud-api-pdo/api/product/read.php");
$result = json_decode($databaru, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Rest API </title>
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- datatable -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="h2 text-center mb-5">Simple Connect to Data Rest API</p>
                <table id="myTable" class="table table-striped table-bordered table-hover">
                    <thead class="text-white" style="background-color: #5D7290">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Category Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $key => $value) { ?>
                            <?php foreach ($value as $keyy => $val) { ?>
                                <tr>
                                    <td><?= $val['id']; ?></td>
                                    <td><?= $val['name']; ?></td>
                                    <td><?= $val['description']; ?></td>
                                    <td><?= $val['price']; ?></td>
                                    <td><?= $val['category_name']; ?></td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>