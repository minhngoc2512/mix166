<?php
class Controller{
	public function __construct(){

	}

	/*Init modelService by name*/
	public function modelService($modelService){
		require_once APP . 'models/' . $modelService . '.php';
		return new $modelService;
	}

	public function views($views, $data=[]){

		
	}
}

