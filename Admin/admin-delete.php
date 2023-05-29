



<?php 


   
   
   require "includes/configure.php";    
    if(!$connnection){
         die("not connected".mysqli_error());
    }else{

       $rcv=$_REQUEST['id'];
       $rcvv=$_REQUEST['photo'];
       $sqlin= "DELETE FROM `admin-table1` WHERE id = $rcv";
   

        $result=mysqli_query($connnection,$sqlin);

   
    if($result){
        unlink("admin-photo/$rcvv");

       
       header("location:refresh.php?deleted");

    }else{
        header("location:admin-show.php?not deleted");
    }
    
   } 

?>




