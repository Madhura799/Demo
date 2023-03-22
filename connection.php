<?php
    $conn=mysqli_connect("localhost","root","","login");
    if(!empty($_POST['save']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query="select * from login where username='$username' and password='$password'";
        
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            echo "Login Successfull";
            header("Location: wel.php");
        }
        else
        {
            echo "Login not successfull";
        } 
    }
?>



    
