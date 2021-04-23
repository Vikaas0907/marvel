<?php
    session_start();
    $con = mysqli_connect('localhost','root','','merchandise');

    if(isset($_POST['deletedata']))
    {
        $id = $_POST['delid'];
         $usna = $_SESSION["username"];
                    $qud = "SELECT d.cust_id from customer as d where user_name = '$usna'";
                     $resultd = $con->query($qud);  // or mysqli_query($con, $tourquery);

                      $tourresultd = $resultd->fetch_array()[0] ?? '';

        $query = "DELETE FROM cart WHERE p_name='$id' and cust_id = $tourresultd ";
        $q = mysqli_query($con,$query);

        if($q){
            echo '<script> alert("Data Deleted"); </script>';
            header("Location: mycart1.php");
        }
        else{
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }

?>