<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plugin Datatables</title>
    <link rel="icon" type="image/png" href="img/icon.png"/>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"/>

</head>

<body>

<div class="container">

        <div class="row">
           <div class="mx-auto mt-5">
                <img src="img/logo.png" width="150" alt="">
           </div>
        </div>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Job Title</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'koneksi.php';
                $employee = mysqli_query($koneksi, "select * from employees");
                while($row = mysqli_fetch_array($employee))
                {
                    echo
                    "<tr>
                    <td>".$row['firstName']."</td>
                    <td>".$row['lastName']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['jobTitle']."</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>
</html>