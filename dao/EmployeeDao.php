<?php

require_once "D:/ALL LANGs/PHP/xampp/htdocs/HotelSys/models/Employee.php";

class EmployeeDao
{
        
   
    public function getAll($table){
        
        $db_hostname = 'localhost';$db_database = 'hotelsys';$db_username = 'root';$db_password = '';
        
        $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
        if ($connection->connect_error) die($connection->connect_error);
        
        if($table=="manger"){
        $query = "SELECT * FROM $table";
        }
        elseif($table=="employee"){
        $query = "SELECT name, id, salary+bounes as 'salary', age, email, bounes, password FROM $table";    
        }
        elseif($table=="client"){
        $query = "SELECT * FROM $table";
        }
        $result = $connection->query($query);
        if (!$result) die($connection->error);
        
        $arr_emp = array();
        $rows = $result->num_rows;
    
        if($table=="manger"){
            for ($j = 0; $j < $rows; ++$j) {
                $emp = new Employee();
                $result->data_seek($j);
                $emp->setname($result->fetch_assoc()['name']);
                $result->data_seek($j);
                $emp->setid($result->fetch_assoc()['id']);
                $arr_emp[] = $emp;
            }
        }
        elseif($table=="employee"){
            for ($j = 0; $j < $rows; ++$j) {
                $emp = new Employee();
                $result->data_seek($j);
                $emp->setname($result->fetch_assoc()['name']);
                $result->data_seek($j);
                $emp->setid($result->fetch_assoc()['id']);
                $result->data_seek($j);
                $emp->setsalary($result->fetch_assoc()['salary']);
                $result->data_seek($j);
                $emp->setage($result->fetch_assoc()['age']);
                $result->data_seek($j);
                $emp->setbounes($result->fetch_assoc()['bounes']);
                $result->data_seek($j);
                $emp->setemail($result->fetch_assoc()['email']);
                $result->data_seek($j);
                $emp->setpassword($result->fetch_assoc()['password']);
                $arr_emp[] = $emp;
            }
        }
        elseif($table=="client"){
            for ($j = 0; $j < $rows; ++$j) {
                $emp = new Employee();
                $result->data_seek($j);
                $emp->setname($result->fetch_assoc()['name']);
                $result->data_seek($j);
                $emp->setadult($result->fetch_assoc()['adult']);
                $result->data_seek($j);
                $emp->setphone($result->fetch_assoc()['phone']);
                $result->data_seek($j);
                $emp->setroom($result->fetch_assoc()['room']);
                $result->data_seek($j);
                $emp->setemail($result->fetch_assoc()['email']);
                $result->data_seek($j);
                $emp->setdate($result->fetch_assoc()['date']);
                $result->data_seek($j);
                $emp->setchecked($result->fetch_assoc()['checked']);                
                $arr_emp[] = $emp;
            }
        }        
        $result->close();
        $connection->close();
        return $arr_emp;
    }
    public function create($emp,$table){
        
        $db_hostname = 'localhost';$db_database = 'hotelsys';$db_username = 'root';$db_password = '';
        
        $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
        if ($connection->connect_error) die($connection->connect_error);

        if($table=="employee"){
        $name     = $emp->getname();
        $id       = $emp->getid();
        $salary   = $emp->getsalary();
        $age      = $emp->getage();
        $bounes   = $emp->getbounes();
        $email    = $emp->getemail();
        $password = $emp->getpassword();
        $query = "INSERT INTO $table (name,id,salary,age,bounes,email,password) VALUES ($name,$id,$salary,$age,$bounes,$email,$password)";
        }
        elseif($table=="client"){
        $name     = $emp->getname();
        $email    = $emp->getemail();
        $phone    = $emp->getphone();
        $room     = $emp->getroom();
        $adult    = $emp->getadult();
        $date     = $emp->getdate();
        $checked  = true;
            
        $query = "INSERT INTO $table (name,email,phone,room,adult,date,checked) VALUES ('$name','$email','$phone','$room','$adult','$date',$checked)";            
        }
        
        $result = $connection->query($query);
      
        if (!$result) die($connection->error);
        $connection->close();
    }

    
    public function update($id,$pun){
        
        $db_hostname = 'localhost';$db_database = 'hotelsys';$db_username = 'root';$db_password = '';
        
        $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
        if ($connection->connect_error) die($connection->connect_error);

        //$name     = $emp->getname();
        //$id       = $emp->getid();
        //$salary   = $emp->getsalary();
        //$age      = $emp->getage();
        //$bounes   = $emp->getbounes();
        //$email    = $emp->getemail();
        //$password = $emp->getpassword();

        $query = "UPDATE `employee` SET `bounes`=$pun WHERE id=$id";
        $result = $connection->query($query);
      
        if (!$result) die($connection->error);
        $connection->close();
    }

    public function delete($id){
        
        $db_hostname = 'localhost';$db_database = 'hotelsys';$db_username = 'root';$db_password = '';

        $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
        if ($connection->connect_error) die($connection->connect_error);

        $query = "DELETE FROM employee WHERE id = $id";
        $result = $connection->query($query);

        if (!$result) die($connection->error);
        $connection->close();
    }

    public function Access($name,$pass,$table){
        
        $db_hostname = 'localhost';$db_database = 'hotelsys';$db_username = 'root';$db_password = '';
        
        $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
        if ($connection->connect_error) die($connection->connect_error);

        $name=$connection->real_escape_string($name);
        $pass=$connection->real_escape_string($pass);
        
        if($name!=""&& $pass!=""){
            $query = "SELECT name From $table WHERE name='$name' and id='$pass'";
            $result = $connection->query($query);
            if (!$result) die($connection->error);
                
            $row   = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            
            if($count==1){
            header('location:dao/ADB/control.php');
            }
            else echo "<h1 class='ERR'>You are not a manger<br/>you can't Access here.</h1>";     
        }
        else echo "<h1 class='ERR'>Enter correct input please.</h1>";
        

    }


}