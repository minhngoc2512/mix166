<?php
ini_set('display_errors',1);

/*Set constant for project path*/
// DIRECTORY_SEPATOR add slash to the end of project path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
ECHO 'root:'.ROOT.'<br>';

/*Set constant for project's "app" path*/
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
echo '<br>App:'.APP.'<br>';

/*Load config file for application*/

require APP . 'config/config.php';

/*Load class file*/
require APP . 'core/app.php';
require APP . 'core/controller.php';

//Start application

$app = new App();