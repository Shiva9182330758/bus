<?php
include('connection.php');  
    $agent = $_POST['aname'];  
    $mobileno = $_POST['mobileno'];
    $pass=$_POST['pass'];

       $sql="insert into agentdetails(agentname,mobileno,password) values('$agent','$mobileno','$pass')";
        $result=mysqli_query($con,$sql);
        if($result==1)
        {
            //header('location:index.html');
            echo "added successfully";

        }
        exit();
?>