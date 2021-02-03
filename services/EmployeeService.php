<?php

require_once "D:/ALL LANGs/PHP/xampp/htdocs/HotelSys/dao/EmployeeDao.php";

class EmployeeService
{

    public function getAll($table){
        $emp_dao = new EmployeeDao();
        return $emp_dao->getAll($table);
    }

    public function create($emp,$table){
        $emp_dao = new EmployeeDao();
        $emp_dao->create($emp,$table);
    }

    public function update($id,$pun){
        $emp_dao = new EmployeeDao();
        $emp_dao->update($id,$pun);
    }

    public function delete($emp){
        $emp_dao = new EmployeeDao();
        $emp_dao->delete($emp);
    }
    public function Access($name,$pass,$table){
        $emp_dao = new EmployeeDao();
        $emp_dao->Access($name,$pass,$table);
    }

}
