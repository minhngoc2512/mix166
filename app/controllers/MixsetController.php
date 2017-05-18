<?php

/**
 * Created by PhpStorm.
 * User: Minhngoc
 * Date: 15/05/2017
 * Time: 16:53
 */
require_once (APP.'models/model.php');
class MixsetController extends model
{
    function index(){
        require_once (APP.'views/user/mixsets/index.php');
    }

}