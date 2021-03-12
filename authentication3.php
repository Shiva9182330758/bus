<?php
include('connection.php');  
    $id = $_POST['busid'];  
    $no = $_POST['no_of_tickets'];
       $sql = "select total_seat from admin where id='$id'";  
       $result = mysqli_query($con,$sql);
       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
       $count = mysqli_num_rows($result);
        if($row["total_seat"]>'$no')
        {
            echo "book  comformed";
            echo $row["total_seat"];
        } 
        else
        {
            echo $row["total_seat"];
        }
        exit();
?>