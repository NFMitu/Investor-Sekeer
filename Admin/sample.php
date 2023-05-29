

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width ,initial-scale=1.0">
        <title>Admin panel</title>
        <link rel="stylesheet" href="adminstyle.css">

    </head>


    <body>

    <div class="container">
            <div class="navbar">
                <ul>
                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="logo-angular"></ion-icon></span>
                        <span class="tittle" style="font-size:22px;"><b>ADMIN PANEL</b></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="tittle">Deshboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="tittle">All User</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="logo-usd"></ion-icon></span>
                        <span class="tittle">Investor</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="bulb-outline"></ion-icon></span>
                        <span class="tittle">Entroproner</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="open-outline"></ion-icon></span>
                        <span class="tittle">Request</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                        <span class="tittle">Help</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="tittle">Setting</span>
                        </a>
                    </li>

                    

                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="tittle">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>

     <!---->

     <div class="main">
          <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>

            </div>

            <!-- search -->

            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>

                </label>
            </div>

                <div class="user">
                    <img src="pic.jpg">

                </div>
         </div>


            <!-- card -->

            <div class="cardbox">
                <div class="card">
                    <div>
                        <div class="numbers">
                            1,504
                        </div>
                        <div class="cardname">
                           Daily view
                        </div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="eye-outline"></ion-icon>  
                    </div>

                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            8504
                        </div>
                        <div class="cardname">
                           All Users
                        </div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="people-outline"></ion-icon>  
                    </div>

                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            504
                        </div>
                        <div class="cardname">
                           Investors
                        </div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="logo-usd"></ion-icon>  
                    </div>

                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            104
                        </div>
                        <div class="cardname">
                           Entroproner
                        </div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="bulb-outline"></ion-icon>  
                    </div>

                </div>
            </div>
            <!-- card end-->


               <!-- chart -->

               <div class="grapbox">
                
                <div class="box"></div>
                <div class="box"></div>
               </div>
               <!-- chart end-->




            <!-- details -->

            <div class="details">
                <div class="record">
                    <div class="cardHeader">
                          <h2>Recent order</h2>
                          <a href="#" class="btn">view all</a>
                    </div>

                     <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>price</td>
                                <td>payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>star refreskkkkk</td>
                                <td>1200$</td>
                                <td>paid</td>
                                <td><span class="status delivered">Delevered</span></td>
                                
                            </tr>

                            <tr>
                                <td>star refreskkkkk</td>
                                <td>1000$</td>
                                <td>paid</td>
                                <td><span class="status delivered">Delevered</span></td>
                                
                            </tr>

                            <tr>
                                <td>Amin</td>
                                <td>200$</td>
                                <td>paid</td>
                                <td><span class="status pending">Pending</span></td>
                                
                            </tr>

                            <tr>
                                <td>Amin</td>
                                <td>200$</td>
                                <td>paid</td>
                                <td><span class="status pending">Pending</span></td>
                                
                            </tr>

                            <tr>
                                <td>Amin</td>
                                <td>200$</td>
                                <td>paid</td>
                                <td><span class="status pending">Pending</span></td>
                                
                            </tr>

                            <tr>
                                <td>Amin</td>
                                <td>200$</td>
                                <td>paid</td>
                                <td><span class="status pending">Pending</span></td>
                                
                            </tr>

                            <tr>
                                <td>Amin</td>
                                <td>200$</td>
                                <td>paid</td>
                                <td><span class="status pending">Pending</span></td>
                                
                            </tr>

                            <tr>
                                <td>kabab</td>
                                <td>700$</td>
                                <td>not paid</td>
                                <td><span class="status pending">not Delevered</span></td>
                                
                            </tr>
                        </tbody>
                     </table>

                </div>

                     <!-- user start -->

            <div class="recentcustomer">
                <div class="cardHeader">
                    <h2>Recent customer</h2>
                    
                </div>
                <table>
                    <tr>
                        <td width="60px">
                            <div class="imgbox"><img src="pic.jpg"></div>
                        </td>
                        <td><h4>Devid<br><span>Italy</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgbox"><img src="pic.jpg"></div>
                        </td>
                        <td><h4>Devid<br><span>Italy</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgbox"><img src="pic.jpg"></div>
                        </td>
                        <td><h4>Devid<br><span>Italy</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgbox"><img src="pic.jpg"></div>
                        </td>
                        <td><h4>Devid<br><span>Italy</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgbox"><img src="pic.jpg"></div>
                        </td>
                        <td><h4>Devid<br><span>Italy</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgbox"><img src="pic.jpg"></div>
                        </td>
                        <td><h4>Devid<br><span>Italy</span></h4></td>
                    </tr>
                </table>
            </div>
            <!-- user end -->


            </div>
            <!-- details end-->



            

            
          </div><!-- main div -->
     
        </div><!-- container div -->
                


        


        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script>

            let toggle=document.querySelector('.toggle');
            let navbar=document.querySelector('.navbar');
            let main=document.querySelector('.main');

            toggle.onclick=function(){
                navbar.classList.toggle('active') 
                main.classList.toggle('active')
            }

            let list=document.querySelectorAll('.navbar li');
            function actvelink(){

                list.forEach((item)=>
                item.classList.remove('hovered'));
                this.classList.add('hovered');
            }

            list.forEach((item)=>
            item.addEventListener('mouseover',activelink));


           
        </script>

    </body>
</html>