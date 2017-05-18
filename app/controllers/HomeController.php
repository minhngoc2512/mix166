<?php
require_once  APP.'models/model.php';

class HomeController extends model {
    function index(){
        //lay mot ban ghi voi dieu kien
      //  $data = $this->getRecord('files',['where'=>'id=1','limit'=>'10']);

        echo "<h1><br>function index on homecontroller</h1>";
        require_once APP.'views/user/home/index.php';
    }
    function add($demo,$name,$pass){
        // chen mot ban ghi. chu y: chen gia tri theo thu tu cot
        $data = $this->addRecord('files',[$demo,$name,$pass]);
        return $data;

    }



}