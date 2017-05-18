<?php

/**
 * Created by PhpStorm.
 * User: minh
 * Date: 18/05/2017
 * Time: 09:22
 */
require_once (APP.'models/model.php');
class ArtistsAdminController extends model
{
    function index(){
        $data = $this->getRecord('artists');
        require_once (APP.'views/admin/artist/listartists.php');
    }
    function add(){
        require_once (APP.'views/admin/artist/addartists.php');
    }
    function addArtists($name,$image){
        echo'<br>name:'.$name;
        echo '<pre>';
        print_r($image);
        echo '</pre>';
        $this->addRecord('artists',['name'=>$name,'image'=>$image['name']]);//them vao csdl
        echo 'add artisr ok';
    }
}