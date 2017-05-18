<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17/05/2017
 * Time: 16:00
 */
require_once  APP.'controllers/ArtistsAdminController.php';
$artists = new ArtistsAdminController();

if(isset($_REQUEST['addartists'])){
    $name =$_REQUEST['name'];
    $image = $_FILES['image'];
    echo 'name:'.$name;
    $artists->addArtists($name,$image);
}