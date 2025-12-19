<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Reset & body */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background: #f4f6f9;
    padding: 40px 0;
    background: linear-gradient(135deg, #f8fafc, #eef2ff);
  color: var(--text);
}

/* Main container */
.contner {
    width: 95%;
    max-width: 1200px;
    margin: auto;
    background: #ffffff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}
.contner:hover{
    transform: translateY(-10px) scale(1.01);
    box-shadow: 0 30px 60px rgba(37, 99, 235, 0.3);
    transform: translateY(-10px);
    border-color: var(--primary);
    
}
/* Heading */
.contner h1 {
    text-align: center;
    margin-bottom: 25px;
    color: #333;
    font-weight: 600;
}

/* Center table */
.center {
    overflow-x: auto;
}

/* Table styling */
.table table {
    width: 100%;
    border-collapse: collapse;
    text-align: center;
}

/* Table header */
.table thead {
    background: #343a40;
    color: #fff;
}

.table thead th {
    padding: 12px;
    font-size: 15px;
    text-transform: uppercase;
}

/* Table body */
.table tbody td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
    font-size: 14px;
}

/* Row hover effect */
.table tbody tr:hover {
    background-color: #f1f1f1;
}

/* Icons */
.table a {
    margin: 0 5px;
    font-size: 16px;
}

/* Edit icon */
.table a .fa-edit {
    color: #007bff;
}

/* Delete icon */
.table a .fa-trash {
    color: #dc3545;
}

/* Icon hover */
.table a:hover .fa-edit {
    color: #0056b3;
}

.table a:hover .fa-trash {
    color: #a71d2a;
}

/* Responsive text */
@media (max-width: 768px) {
    .contner h1 {
        font-size: 22px;
    }

    .table thead th,
    .table tbody td {
        font-size: 13px;
        padding: 8px;
    }
}

    </style>
</head>

<body>
    <div class="contner">
        <h1>All Form in information</h1>
        <div class="center">
            <div class="table">
                <table>
                    <thead>

                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>password</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include 'connection_form.php';

                        $select_query = "select * from sign_form1 ";
                        $check = mysqli_query($con,  $select_query);
                        $rows = mysqli_num_rows($check);
                        // echo $rows;
                        // $result=mysqli_fetch_array($check);
                        // echo $result['3'] ; 
                        while ($result = mysqli_fetch_array($check)) {
                        ?>
                            <tr>
                                <td> <?php echo $result['id']; ?></td>
                                <td> <?php echo $result['username']; ?></td>
                                <td> <?php echo $result['password']; ?></td>
                                <td> <?php echo $result['email']; ?></td>
                                <td> <?php echo $result['phone']; ?></td>
                                <td> <a href="update.php?id= <?php echo $result['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa fa-edit"></i></a> </td>
                                <td> <a href="delete.php?id= <?php echo $result['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"> <i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

</body>

</html>