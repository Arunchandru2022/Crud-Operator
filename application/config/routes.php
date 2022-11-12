<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['/'] = 'Home/index';
$route['insert'] = 'Home/insert';
$route['fetch'] = 'Home/fetch';
$route['delete'] = 'Home/delete';
$route['edit'] = 'Home/edit';
$route['update'] = 'Home/update';
$route['sendemail'] = 'Home/sendemail';

