<!DOCTYPE HTML>
  <html>
     <head>
        <title>HolidayCrown | Manger</title>
        <style>
          body{background:black url("front/images/photos/banner.jpg") no-repeat;background-size:cover;}
         .box{background:rgba(105, 105, 105,0.3);height:250px;width:530px;position:absolute;top:75px;left:520px;box-shadow:2px 2px 20px black;t}
         .box h1{color:lightblue;margin:30px;font-size:40px;text-align:center;}
         .fo{background:none;outline:none;border:none;border-bottom: 1px solid black;margin:20px;padding:5px;color:lightblue;font-size:15px;}
         .btn{width:30%;outline: none;background:rgba(30, 144, 255,0.7);color:white;border: 2px solid rgba(30, 144, 255,0.7);border-radius:15px;padding:5px;
              position:absolute;top:190px;left:60px;}
              #nd{ position:absolute;top:190px;left:300px; }
         .btn:hover{background-color:rgb(30, 144, 255);}
         .ERR{font-size:70px;color:red;position:absolute;top:50%;left:10%;}
         .tap{background:white;position:absolute;top:60%;left:11.5%;text-align:left;border-collapse:separate;font-family:monospace;font-size:25px;}
         tr{background:AliceBlue;}
         td{padding:5px 30px 5px 2px;background:lightblue;}
        </style>
     </head>
     <body>
         <form role="form" class="box" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" enctype="multipart/form-data">
             <h1>Manger Access</h1>
             <input  type="text" class="fo" placeholder="Manger Name" name="n">
             <input  type="password" class="fo"placeholder="Password" name="p">
             <button type="submit" class="btn" name="SUB">Submit</button>
             <a href="front/#home"><input type="button" class="btn" id="nd" value="Back to home"></a>
         </form>
         <?php
             require_once("D:/ALL LANGs/PHP/xampp/htdocs/HotelSys/controllers/EmployeeController.php");
             require_once("D:/ALL LANGs/PHP/xampp/htdocs/HotelSys/models/Employee.php");
             
             if(isset($_POST['SUB'])){                
                $Manger = new EmployeeController();
                $Manger->Access($_POST['n'],$_POST['p'],"manger");
             } 
         ?>
         
         
         
     </body>
  </html>
 