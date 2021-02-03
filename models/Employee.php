<?php


class Employee
{
    private $name;
    private $id;
    private $salary;
    private $age;
    private $bounes;
    private $email;
    private $password;
    private $phone;
    private $date;
    private $room;
    private $adult;
    private $checked;

    
    
    public function getname(){
        return $this->name;
    }
    public function setname($name){
        $this->name = $name;
    }   
    public function getid(){
        return $this->id;
    }
    public function setid($id){
        $this->id = $id;
    }   
    public function getsalary(){
        return $this->salary;
    }
    public function setsalary($salary){
        $this->salary = $salary;
    }
    public function getage(){
        return $this->age;
    }
    public function setage($age){
        $this->age = $age;
    }
    public function getbounes(){
        return $this->bounes;
    }
    public function setbounes($bounes){
        $this->bounes = $bounes;
    }
    public function getemail(){
        return $this->email;
    }
    public function setemail($email){
        $this->email=$email;
    }   
   
    public function getpassword(){
        return $this->password;
    }
    public function setpassword($password){
        $this->password=$password;
    }
    
    
    public function getphone(){
        return $this->phone;
    }
    public function setphone($phone){
        $this->phone=$phone;
    }    
    public function getdate(){
        return $this->date;
    }
    public function setdate($date){
        $this->date=$date;
    }  
    public function getroom(){
        return $this->room;
    }
    public function setroom($room){
        $this->room=$room;
    }    
    public function getadult(){
        return $this->adult;
    }
    public function setadult($adult){
        $this->adult=$adult;
    }
    public function getchecked(){
        return $this->checked;
    }
    public function setchecked($checked){
        $this->checked=$checked;
    }

}    

