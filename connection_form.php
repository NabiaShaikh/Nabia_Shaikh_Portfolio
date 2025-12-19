<?php
$servername="localhost";
$username="root";
$password="";
$dbname="form";
 $con=mysqli_connect($servername,$username,$password,$dbname);
 if($con){
    ?>
    <script>
        alert("connect successful");
    </script>
    <?php
 }
 else{
     ?>
    <script>
        alert=("connect not successful");
    </script>
    <?php
 }
?>