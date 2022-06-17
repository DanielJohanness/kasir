<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home/Dashboard';
$route['404_override'] = 'Error_Handler';
$route['translate_uri_dashes'] = FALSE;

$route['Dashboard'] = 'Home/Dashboard';
$route['Login'] = 'Auth/Login';

$route['Data-User'] = 'Admin/Process_User/Data_User';
$route['Tambah-User'] = 'Admin/Process_User/Tambah_User';
$route['Edit-User/(:any)'] = 'Admin/Process_User/Edit_User/$1';

$route['Data-Transaksi'] = 'Admin/Process_Transaksi/Data_Transaksi';
$route['Tambah-Transaksi'] = 'Admin/Process_Transaksi/Tambah_Transaksi';
// $route['Edit-Transaksi/(:any)'] = 'Admin/Process_Transaksi/Edit_Transaksi/$1';

$route['Data-Menu'] = 'Admin/Process_Menu/Data_Menu';
$route['Tambah-Menu'] = 'Admin/Process_Menu/Tambah_Menu';
$route['Edit-Menu/(:any)'] = 'Admin/Process_Menu/Edit_Menu/$1';

$route['Laporan-Penjualan'] = 'Home/Laporan_Penjualan';
$route['User-Log'] = 'Home/User_Log';