<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//========================= DASHBOARD ROUTE CONTROLLER ===========================//

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'Pages\Dashboard\DashboardController@index');

//================================================================================//


//============================ SOSIAL ROUTE CONTROLLER ===========================//

Route::get('/social', 'Pages\Social\SocialController@social');

//================================================================================//


//=========================== CALENDAR ROUTE CONTROLLER ==========================//

Route::get('/calendar', 'Pages\Calendar\CalendarController@calendar');

Route::get('/calendar_lang', 'Pages\Calendar\CalendarController@calendarLang');

Route::get('/calendar_month', 'Pages\Calendar\CalendarController@calendarMonth');

Route::get('/calendar_lazy', 'Pages\Calendar\CalendarController@calendarLazy');

//================================================================================//


//========================== UI ELEMENT ROUTE CONTROLLER =========================//

Route::get('/color', 'Pages\UI_Elements\UI_ElementController@color');

Route::get('/typography', 'Pages\UI_Elements\UI_ElementController@typography');

Route::get('/icons', 'Pages\UI_Elements\UI_ElementController@icons');

Route::get('/buttons', 'Pages\UI_Elements\UI_ElementController@buttons');

Route::get('/notifications', 'Pages\UI_Elements\UI_ElementController@notifications');

Route::get('/modals', 'Pages\UI_Elements\UI_ElementController@modals');

Route::get('/progress', 'Pages\UI_Elements\UI_ElementController@progress');

Route::get('/tabs_accordian', 'Pages\UI_Elements\UI_ElementController@tabsAccordian');

Route::get('/sliders', 'Pages\UI_Elements\UI_ElementController@sliders');

//TREE VIEW ==================================================//

Route::get('tree_view', 'Pages\UI_Elements\TreeView\TreeController@index');

Route::get('get_tree', 'Pages\UI_Elements\TreeView\TreeController@getTree');

Route::get('/post_tree', 'Pages\UI_Elements\TreeView\TreeController@postTree');

Route::post('/post_tree', 'Pages\UI_Elements\TreeView\TreeController@postTree');

Route::get('get_pdf/{type}/{id}/{tahun}', 'Pages\UI_Elements\TreeView\TreeController@getPDF');

Route::post('/upload','Pages\UI_Elements\TreeView\TreeController@test');

Route::get('/get_download_file', 'Pages\UI_Elements\TreeView\DownloadController@getDownload');

Route::get('/dataTable', 'Pages\UI_Elements\TreeView\DownloadController@test');

//END ========================================================//

Route::get('/nestables', 'Pages\UI_Elements\UI_ElementController@nestables');

//================================================================================//


//============================= FORM ROUTE CONTROLLER ===========================//

Route::get('/form_elements', 'Pages\Forms\FormController@formElements');

Route::get('/form_layouts', 'Pages\Forms\FormController@formLayouts');

Route::get('/form_wizard', 'Pages\Forms\FormController@formWizard');

//================================================================================//


//============================= BUILDER ROUTE CONTROLLER ===========================//

Route::get('/builder', 'Pages\Builder\BuilderController@builder');

Route::get('/with_sidebar_builder', 'Pages\Builder\BuilderController@withSidebarBuilder');

//================================================================================//


//============================= CARDS ROUTE CONTROLLER ===========================//

Route::get('/card', 'Pages\Card\CardController@card');

//================================================================================//


//============================= MENU ROUTE CONTROLLER ===========================//

Route::get('/view', 'Pages\Menu\MenuController@view');

Route::get('/tables', 'Pages\Menu\MenuController@tables');

Route::get('/datatables', 'Pages\Menu\MenuController@datatables');

Route::get('/google_map', 'Pages\Menu\MenuController@googleMap');

Route::get('/vector_map', 'Pages\Menu\MenuController@vectorMap');

Route::get('/charts', 'Pages\Menu\PenjualanController@index');

Route::get('/penjualan_tahun', 'Pages\Menu\PenjualanController@getTahun');

Route::get('/penjualan_bulan', 'Pages\Menu\PenjualanController@getBulan');

Route::get('/penjualan_hari', 'Pages\Menu\PenjualanController@getHari');

Route::get('/sell', 'Pages\Menu\PenjualanController@sell');

Route::get('/invoice', 'Pages\Menu\MenuController@invoice');

Route::get('/404', 'Pages\Menu\MenuController@fourError');

Route::get('/500', 'Pages\Menu\MenuController@fiveError');

Route::get('/blank_template', 'Pages\Menu\MenuController@blankTemplate');

Route::get('/login1', 'Pages\Menu\MenuController@login');

Route::get('/register', 'Pages\Menu\MenuController@register');

Route::get('/lock_screen', 'Pages\Menu\MenuController@lockScreen');

Route::get('/gallery', 'Pages\Menu\MenuController@gallery');

Route::get('/timeline', 'Pages\Menu\MenuController@timeLine');

//================================================================================//


//============================= lOGIN ROUTE CONTROLLER ===========================//

Auth::routes();

Route::get('/getLogin', 'Auth\LoginController@testLogin');

//================================================================================//


//============================= lOGIN ROUTE CONTROLLER ===========================//

Route::get('/create_notes', 'Pages\NotesController@createNotes');

Route::get('/edit_notes', 'Pages\NotesController@editNotes');

Route::get('/get_notes', 'Pages\NotesController@getNotes');

Route::get('/delete_notes', 'Pages\NotesController@deleteNotes');

//================================================================================//


Route::get('/home', 'PageController@index');
