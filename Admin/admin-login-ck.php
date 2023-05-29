<?php
session_start();

     require "includes/configure.php";

    // $connnection = mysqli_connect('localhost','root','','project_investor_seeker_db');

   if(!$connnection){
        die("not connected".mysqli_error($connnection));
     }else{

    if(isset($_REQUEST['submittt'])){

        $usname=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        

        $query="SELECT * FROM `admin-table1` WHERE username='$usname' && password='$password'";

       

        $pass=mysqli_query($connnection,$query);
        $row_count=mysqli_num_rows($pass);

        if($row_count){
            echo "Login success";
            $_SESSION['username']=$usname;
            $_SESSION['current-time']=time();

            


            if($_REQUEST)
            header("location:admin.php");

        }else{
                
                
                    header("location:login.php");
                    echo "not loged in";
                
                // investor
        }
    }
}

?>