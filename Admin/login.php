

<!DOCTYPE html>
<html>
    <head>
       
    <style>

        *{
            box-sizing:border-box;
        }

        body{
            background-color:#2CBDDE;
            display:flex;
            justify-content:center;
            align-items: center;
            background: #ABCDEF;
            font-family: Assistant, sans-serif;
            display: flex;
             min-height: 90vh;
        }

        .container{
            height:420px;
            width:400px;
            
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            background-color:white;
            padding:60px;
            text-align:center;
            border-radius: 40px;
            
        }

        .container div{
            font-size:20px;
            
        }


 #username{
    width: 300px;
    height: 40px;
    border: 2px solid blue;
    border-radius: 20px;
    padding-left: 8px;
}
#password{
    width: 300px;
    height: 40px;
    border: 2px solid blue;
    border-radius: 20px;
    padding-left: 8px;

}
#submit{
    width: 300px;
    height: 40px;
    border: none;
    background:blue;
    color:white;
    border-radius: 17px;
    padding-left: 7px;
   


}

#submit:hover{
    scale:1.15;


}
input placeholder{
    font-size:20px;
}
    </style>


    </head>

    <body>
   <form action="admin-login-ck.php" method="get">
      <div class="container">

    <h2>Admin <span>Login</span></h2>
        <div class="lebel">
               
            <input type="text" name="username" id="username" placeholder="username"><br><br>
        </div>
         <div class="lebe2">
              
               <input type="text" name="password" id="password" placeholder="password"><br><br>
        </div>

        <div class="lebe3">
               
               <input type="submit" name="submittt" id="submit" value="Login"><br>
        </div>
    </div>

    </form>


    </body>
</html>


<?php
 

 if(isset($_REQUEST['submitt'])){
    echo $_REQUEST['santo'];
 }

 


?>