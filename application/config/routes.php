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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'home/login';
$route['proses_login'] = 'home/proses_login';
$route['logout'] = 'home/logout';

//guru
$route['add-guru'] = 'guru/add_guru';
$route['proses-add-guru'] = 'guru/proses_add_guru';
$route['edit-guru'] = 'guru/edit_guru';
$route['data-guru']='guru';

//siswa
$route['add-siswa'] = 'siswa/add_siswa';
$route['proses-add-siswa'] = 'siswa/proses_add_siswa';
$route['edit-siswa'] = 'siswa/edit_siswa';
$route['data-siswa']='siswa';

//prakerin
$route['data-prakerin-guru'] = 'prakerin';
$route['data-prakerin-siswa'] = 'prakerin/data_prakerin_siswa';
$route['add-prakerin'] = 'prakerin/add_prakerin';
$route['proses-add-prakerin'] = 'prakerin/proses_add_prakerin';
$route['documentation'] = 'home/documentation';
$route['help'] = 'home/help';

$route['tanggal-prakerin'] = 'prakerin/tanggal_prakerin';
$route['add-tanggal-prakerin'] = 'prakerin/add_tanggal_prakerin';
$route['proses-add-tanggal-prakerin'] = 'prakerin/proses_add_tanggal_prakerin';
$route['edit-tanggal-prakerin'] = 'prakerin/edit_tanggal_prakerin';

$route['pengajuan-prakerin'] = 'prakerin/pengajuan_siswa';
$route['pengelolaan-prakerin'] = 'prakerin/pengelolaan_prakerin';
