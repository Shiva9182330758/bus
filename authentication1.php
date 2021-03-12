<?php
include('connection.php');  
    $busname = $_POST['bname'];  
    $from = $_POST['from'];
    $to=$_POST['to'];
    $seat=$_POST['seat'];
    $price=$_POST['price'];  
      
        //to prevent from mysqli injection  
        //$username = stripcslashes($username);  
        //$password = stripcslashes($password);  
      // $username = mysqli_real_escape_string($con, $username);  
      // $password = mysqli_real_escape_string($con, $password);

       $sql="insert into admin(bus_name,from_l,to_l,total_seat,price) values('$busname','$from','$to','$seat','$price')";
        $result=mysqli_query($con,$sql);
        if($result==1)
        {
            //header('location:index.html');
            echo "added successfully";

        }
        exit();
?>

