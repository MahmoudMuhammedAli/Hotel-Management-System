<!DOCTYPE HTML>
  <html>
     <head>
        <title>All Data</title>
        <style>
        tr{background:none;}
        td{padding:5px 30px 5px 2px;background:rgba(0,0,0,0.8);}
        table{background:rgba(0,0,0,0.6);position:absolute;top:50%;left:5%;text-align:left;border-collapse:separate;font-family:monospace;font-size:25px;box-shadow:3px 3px 20px white;}
        
         #bth{position:absolute ; top :85%  ;left: 37%;  }
        body{background:url(black.jpg);color:lightblue;}
        .box_Show{position:absolute;top:10%;left:5%;background:rgba(0,0,0,0.6);height:200px;width:650px;box-shadow:3px 3px 20px white;}
        .box_Bounes{position:absolute;top:10%;left:50%;background:rgba(0,0,0,0.6);height:200px;width:650px;box-shadow:3px 3px 20px white;}
        .on3{font-size:40px;margin:20px 40px 0 40px;background:none;outline:none;border:none;border-bottom:1px solid gray;width:140px;color:lightblue;}        
        .on1{font-size:40px;margin:20px 40px 0 40px;background:none;outline:none;border:none;border-bottom:1px solid gray;width:390px;color:lightblue;}
        .on2{font-size:50px;margin:20px 40px 0 40px;background:lightblue;outline:none;border-radius:10px;border:0;}
        .ERR{font-size:70px;color:red;position:absolute;top:50%;left:10%;}
        .tex{font-size:50px;color:lightblue;margin:0 0 0 15px;text-shadow:2px 2px 15px black;}
        </style>
     </head>
     <body>
        <form class="box_Show" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" enctype="multipart/form-data">
            <h1 class="tex">Show Data</h1>
            <input   type="text"   class="on1"   name="INP" placeholder="Enter data name..">            
            <button  type="submit" class="on2"   name="GO1">Go</button>
        </form>
       
        <form class="box_Bounes" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" enctype="multipart/form-data">
            <h1 class="tex">Bounes</h1>
            <input   type="text"   class="on3"   name="ID" placeholder="Id">
            <input   type="text"   class="on3"   name="PUN" placeholder="Bounes">                       
            <button  type="submit" class="on2"   name="GO2">Go</button>
        </form>
        
            <?php
             require_once("D:/ALL LANGs/PHP/xampp/htdocs/HotelSys/controllers/EmployeeController.php");
             require_once("D:/ALL LANGs/PHP/xampp/htdocs/HotelSys/models/Employee.php");
    
             if(isset($_POST['GO1'])){
                    if($_POST['INP']==""){
                      echo "<h1 class='ERR'>Enter a Data</h1>"; 
                    }
                    elseif($_POST['INP']=="employee"){
                      $EMP = new EmployeeController();
                      prin($EMP->getAll("employee"),"employee");
                    }
                    elseif($_POST['INP']=="manger"){
                      $MAN = new EmployeeController();
                      prin($MAN->getAll("manger"),"manger");
                    }
                    elseif($_POST['INP']=="client"){
                      $MAN = new EmployeeController();
                      prin($MAN->getAll("client"),"client");
                    }                    
                    else echo "<h1 class='ERR'>Data Not Found</h1>";
                    
             }         
             if(isset($_POST['GO2'])){
                    if($_POST['ID']!="" && $_POST['PUN']!=""){
                      $EMP = new EmployeeController();
                      $EMP->update($_POST['ID'],$_POST['PUN']);
                      $EMPS = new EmployeeController();
                      prin($EMPS->getAll("employee"),"employee");
                    }
                    else{
                    echo "<h1 class='ERR'>Enter a Id and Pounes</h1>"; 
                    }                    
             }
            function prin($list,$table){
                echo "<table>";
                if($table=="employee"){
                  echo "<tr><th>Name</th><th>Id</th><th>Salary</th><th>Age</th><th>Bounes</th><th>Email</th><th>Password</th></tr>";
                  foreach ($list as $emp) {
                        echo "<tr>";
                          echo "<td>" . $emp->getname()    . "</td>";
                          echo "<td>" . $emp->getid()      . "</td>";
                          echo "<td>" . $emp->getsalary()  . "</td>";
                          echo "<td>" . $emp->getage()     . "</td>";
                          echo "<td>" . $emp->getbounes()  . "</td>";
                          echo "<td>" . $emp->getemail()   . "</td>";
                          echo "<td>" . $emp->getpassword(). "</td>";
                         echo "</tr>";
                  }
                }
                elseif($table=="manger"){
                    echo "<tr><th>Name</th><th>Id</th>";
                    foreach ($list as $emp) {
                         echo "<tr>";
                           echo "<td>" . $emp->getname()    . "</td>";
                           echo "<td>" . $emp->getid()      . "</td>";
                         echo "</tr>";
                   }
                }
                elseif($table=="client"){
                  echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Room</th><th>Adult</th><th>Date</th><th>Checked</th></tr>";
                  foreach ($list as $emp) {
                        echo "<tr>";
                          echo "<td>" . $emp->getname()      . "</td>";
                          echo "<td>" . $emp->getemail()  . "</td>";
                          echo "<td>" . $emp->getphone()     . "</td>";
                          echo "<td>" . $emp->getroom()  . "</td>";
                          echo "<td>" . $emp->getadult()   . "</td>";
                          echo "<td>" . $emp->getdate(). "</td>";
                          echo "<td>" . $emp->getchecked(). "</td>";
                         echo "</tr>";
                  }
                }
                echo "</table>";
            }             

            ?>
        <div>
        <a href="../../front/#home"><input type="button" class="on2" id="bth" id="nd" value="Back to home"></a>
        </div>
     </body>
    </html>
  
