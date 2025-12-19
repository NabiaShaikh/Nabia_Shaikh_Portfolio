
<?php 
include 'connection_form.php';
 $id=$_GET['id'];
        //show id
        $deletequery="delete from sign_form1 where id=$id ";

        $show=mysqli_query($con,  $deletequery);
        if ($show){
            ?>
            <script>
                alert("Data has been delete");
            </script>
            <?php
            
        }
        else{
             ?>
            <script>
                alert("Data has  not been delete");
            </script>
            <?php
        }
        header( 'location:display.php');
?>