<?php

/*Configuration for: URL*/

define('URL_PUBLIC_FOLDER', 'public'); /*public folder*/
define('URL_PROTOCOL', '//'); /*protocol-independent '//' is used, which auto-recognized the protocol.*/
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);

