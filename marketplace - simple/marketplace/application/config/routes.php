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

$route['default_controller'] 			= 'welcome';
$route['xcallback'] 					= 'mycallback';
$route['api/history'] 					= 'historytrx';

$route['auth'] 							= 'login';
$route['intro'] 						= 'mobileapi/Intromobile';


$route['api/produk'] 					= 'mobileapi/produk';
$route['api/kategori']					= 'mobileapi/produk/kategori';
$route['api/trx/pembelian']				= 'mobileapi/pembelian';
$route['api/trx/pembelianpln']			= 'mobileapi/pembelian/pembelianpln';

$route['api/cektagihan']				= 'mobileapi/pembayaran/cektagihan';
$route['api/pelunasan']					= 'mobileapi/pembayaran/pelunasan';
$route['api/test']						= 'mobileapi/pembayaran/tesdata';


/*$route['prd/pulsa'] 					= 'h2h_tri/tripay';
$route['prd/pembayaran']				= 'mobileapi/pembayaran';
$route['tokenpln']						= 'mobileapi/pln/tokenpln';

$route['cek/pembayaran'] 				= 'h2h_tri/tri_pembayaran';


$route['pulsa/(:num)'] 					= 'h2h_tri/tripay/detailpulsa';
$route['trx/pulsa'] 					= 'h2h_tri/tripay/trx';
$route['proses/pulsa'] 					= 'h2h_tri/tripay/prosespulsa';

$route['triprd'] 						= 'produktri';
$route['triprd/pembelian'] 				= 'produktri/pembelian';
$route['triprd/pembayaran'] 			= 'produktri/prosespembayaran';
*/


////////////////////////////////////////////////////////////////
$route['auth/sign-in'] 					= 'dashboard/login';
$route['auth/sign-out'] 				= 'dashboard/logout';

$route['dashboard'] 					= 'dashboard';
$route['kategori'] 						= 'kategori';
$route['kategori/(:num)']				= 'kategori';
$route['kategori/edit-kat/(:num)']   	= 'kategori/build_edit/$1';
$route['kat/delete/(:num)']				= 'kategori/hapuskat';

$route['produk/pembelian'] 				= 'produk';
$route['produk/penjualan'] 				= 'produk';

$route['produk/pembelian/(:num)'] 		= 'produk';
$route['produk/penjualan/(:num)'] 		= 'produk';

$route['addproduk'] 					= 'produk/tambahproduk';
$route['prod/delete/(:num)']			= 'produk/hapusprod';
$route['editproduk/(:num)']			    = 'produk/editproduk';

$route['laporan'] 						= 'laporan';
$route['laporan/pag/[A-Z-a-z-0-9\-]/[A-Z-a-z-0-9\-]/(:num)'] 				= 'laporan/pag/$1/$2/$3';
$route['detailtrx/(:num)']				= 'laporan/trxdetail';

$route['iklan'] 						= 'iklan';
$route['iklan/edit/(:num)'] 			= 'iklan/build_edit/$1';
$route['iklan/delete/(:num)'] 			= 'iklan/hapuskat/$1';

$route['datauser'] 						= 'datauser';
$route['datauser/edit/(:num)'] 			= 'datauser/build_edit/$1';
$route['datauser/delete/(:num)'] 		= 'datauser/hapuskat/$1';

$route['market_kat'] 					= 'market_kat';
$route['market_kat/edit/(:num)'] 		= 'market_kat/build_edit/$1';
$route['market_kat/delete/(:num)'] 		= 'market_kat/hapuskat/$1';

$route['market_prod'] 					= 'market_prod';
$route['market_prod/add']        		= 'market_prod/build_add/$1';
$route['market_prod/edit/(:num)'] 		= 'market_prod/build_edit/$1';
$route['market_prod/delete/(:num)'] 	= 'market_prod/hapuskat/$1';

$route['404_override'] 					= '';
$route['translate_uri_dashes'] = FALSE;
