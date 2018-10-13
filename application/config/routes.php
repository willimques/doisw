<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//$route['upload'] = 'Base/Upload';
$route['download/(:any)/(:any)'] = 'Upload/Download/$1/$2';
$route['imagens'] = 'views\assets\img';