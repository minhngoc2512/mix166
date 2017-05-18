<?php

/**
 * Created by PhpStorm.
 * User: Minhngoc
 * Date: 15/05/2017
 * Time: 16:05
 */
require_once APP . 'commons/DBFactory.php';

class model
{
    private $conn = null;

    function __construct()
    {
        DBFactory::getInstance();
        $this->conn = DBFactory::$conn;
    }

    protected function getRecord($table, $option = array())
    {
        $select = isset($option['select']) ? $option['select'] : ' * ';
        $where = isset($option['where']) ? ' WHERE ' . $option['where'] : '';
        $order_by = isset($option['order_by']) ? ' ORDER BY' . $option['order_by'] : '';
        $limit = isset($option['limit']) ? ' LIMIT ' . $option['limit'] : '';
        $sql = "SELECT $select FROM $table $where $order_by $limit";
        $value = $this->conn->query($sql);
        $data = array();
        while ($row = $value->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    public function check($table,$value){
        $sql = "SELECT * FROM $table where name='$value'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            return false;
        }else{
            return true;
        }

    }
    protected function addRecord($table,$value=array()){
        $name=$value['name'];
        $data='';
        if($this->check($table,$name)){
            foreach ($value as $result){
                $data.=",'$result'";
            }
            $sql ="INSERT INTO  $table VALUES (null $data)";
            echo '<br>sql:'.$sql.'<br>';
            $this->conn->query($sql);

            return true;
        }else{
            return false;
        }

    }

    protected function updateRecord($table,$value=array(),$id){
        $data ='';
        $i=0;

        foreach($value as $key =>$result){
            if($result!=null){
                if($i==0) {
                    $data .= " $key='$result'";
                    $i++;
                }
                $data.=", $key='$result'";

            }
        }
        $sql = "UPDATE $table SET $data WHERE id=$id";
        if($this->conn->query($sql)->num_rows>0){
            return true;
        }
        return false;

    }
    protected function deleteRecord($table,$id){
    $sql = "DELETE FROM $table WHERE  id =$id";
    }
    protected function checkLogin($data=array()){
        $name = $data['name'];
        $pass = md5($data['pass']);
        $sql = "SELECT * FROM user WHERE username='$name' AND password='$pass'";
        $value = $this->conn->query($sql);
        if($value->num_rows>0){
            return true;
        }
        else{
            return false;
        }

    }


}