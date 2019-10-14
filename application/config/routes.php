s<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'jofcontroller/view';
$route['(:any)'] = 'jofcontroller/view/$1';
$route['jof/admin'] = 'admin/admincon';
$route['jof/broker'] = 'employee/brokercon';
$route['jof/accounting'] = 'employee/acctcon';
$route['jof/consignee'] = 'employee/conscon';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
