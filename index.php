<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý user</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link href="" stylesheet="text/css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <?php
        include "Model/DBconfig.php";
        $db = new DBconfig;
        $db->connect();

    ?>

<div class="container" style="margin-top: 3rem; margin-bottom: 3rem">  
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nguyen Oni</td>
                <td>xmr</td>
                <td>nguyenoni@gmail.com</td>
                <td>+841225125</td>
                
            </tr>
            
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </tfoot>
    </table>

    

</div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" >
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</body>
</html>