<?php

use App\Hotele;
use App\Ville;

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

Route::get('/', function () {
    $hoteles = Hotele::all();
    $villes = Ville::all();

    return view('welcome', compact("hoteles", "villes"));
});

Route::get('/nav', function () {
    return view('headFoot.nav');
});
Route::get('/foot', function () {
    return view('headFoot.foot');
});
Route::get('/connect', function () {
    return view('connect');
});
Route::get('/service', function () {
    return view('service');
});

Route::get('/bobo', 'VilleController@view')->name('bobo.view');
Route::get('/ouaga', 'VilleController@view2')->name('ouaga.view2');
Route::get('/koudougou', 'VilleController@view3')->name('koudougou.view3');


Route::get('/ibah', 'ChambreController@view')->name('ibah.view');
Route::get('/silmand', 'ChambreController@view2')->name('silmande.view2');
Route::get('/splendid', 'ChambreController@view3')->name('splendid.view3');
Route::get('/brav', 'ChambreController@view4')->name('bravia.view4');
Route::get('/lancasta', 'ChambreController@view5')->name('lancastar.view5');
Route::get('/sabi', 'ChambreController@view6')->name('saby.view6');
Route::get('/pacifi', 'ChambreController@view7')->name('pacific.view7');
Route::get('/dim', 'ChambreController@view8')->name('dima.view8');
Route::get('/pous', 'ChambreController@view9')->name('pousga.view9');



Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome');
Route::get('/contact', 'ContactController@showContactForm')->name('contact.showContactForm');
Route::post('/contac', 'ContactController@submitContactForm')->name('contact.submit');
Route::get('/contact/liste', 'ContactController@liste')->name('contact.liste');
Route::get('/contact/delete/{id}', 'ContactController@delete')->name('delete');

///////////////////////////////////////////////////////////////
////*ajout hotel*////
///////////////////////////////////////////////////////////////

Route::get('/hotele', 'HoteleController@liste')->name('hotele.liste');
Route::get('/hotele2', 'HoteleController@liste2')->name('hotele.liste2');
Route::get('/hotele3', 'HoteleController@liste3')->name('hotele.liste3');
Route::post('/hotele/ajouter', 'HoteleController@ajouter')->name('hotele.ajouter');
Route::post('/hotele/update/{id}', 'HoteleController@update')->name('hotele.update');
Route::get('/hotele/delete/{id}', 'HoteleController@delete')->name('delete');

///////////////////////////////////////////////////////////////
////*ajout ville*////
///////////////////////////////////////////////////////////////

Route::get('/ville', 'VilleController@liste')->name('ville.liste');
Route::post('/ville/ajouter', 'VilleController@ajouter')->name('ville.ajouter');
Route::post('/ville/update/{id}', 'VilleController@update')->name('ville.update');
Route::get('/ville/delete/{id}', 'VilleController@delete')->name('delete');

///////////////////////////////////////////////////////////////
////*ajout chambre*////
///////////////////////////////////////////////////////////////

Route::get('/lancastar/lanListe', 'ChambreController@lanListe')->name('lancastar.lanListe');
Route::get('/saby/sabyListe', 'ChambreController@sabyListe')->name('saby.sabyListe');
Route::get('/pacific/pacListe', 'ChambreController@pacListe')->name('pacific.pacListe');
Route::get('/dima/dimaListe', 'ChambreController@dimaListe')->name('dima.dimaListe');
Route::get('/bravia/braListe', 'ChambreController@braListe')->name('bravia.braListe');
Route::get('/pousga/pousListe', 'ChambreController@pousListe')->name('pousga.pousListe');

Route::get('/chambre/liste', 'ChambreController@liste')->name('chambre.liste');
Route::get('/chambre2/liste2', 'ChambreController@liste2')->name('chambre2.liste2');
Route::get('/chambre3/liste3', 'ChambreController@liste3')->name('chambre3.liste3');

Route::post('/chambre/ajouter', 'ChambreController@ajouter')->name('chambre.ajouter');
Route::post('/chambre/update/{id}', 'ChambreController@update')->name('chambre.update');
Route::get('/chambre/delete/{id}', 'ChambreController@delete')->name('delete');


//////////////////////////////////////////////////////
/*admin auth */
/////////////////////////////////////////////////////

Route::
        namespace('Admin')->group(function () {
            Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
            Route::post('/admin/login', 'Auth\LoginController@login');
            Route::get('/admin/home', 'AdminController@index')->name('admin.home');
            Route::get('/admin/home/delete/{id}', 'AdminController@delete')->name('delete');
        });

////////////////////////////////////////////////////
/*reservation*/
//////////////////////////////////////////////////

Route::group(['middleware' => 'auth'], function () {
    Route::post('/reservation', 'ReservationController@reserve')->name('reservation');
});


Route::get('/admin/reservation1', 'ReservationController@liste1')->name('admin.liste1');
Route::get('/admin/reservation2', 'ReservationController@liste2')->name('admin.liste2');
Route::get('/admin/reservation3', 'ReservationController@liste3')->name('admin.liste3');
Route::get('/admin/reservation4', 'ReservationController@liste4')->name('admin.liste4');
Route::get('/admin/reservation5', 'ReservationController@liste5')->name('admin.liste5');
Route::get('/admin/reservation6', 'ReservationController@liste6')->name('admin.liste6');
Route::get('/admin/reservation7', 'ReservationController@liste7')->name('admin.liste7');
Route::get('/admin/reservation8', 'ReservationController@liste8')->name('admin.liste8');
Route::get('/admin/reservation9', 'ReservationController@liste9')->name('admin.liste9');
Route::get('/reservatin/delete/{id}', 'ReservationController@delete')->name('delete');

Route::get('/mesReservations', 'ReservationController@viewReserve')->name('MesReservations');
Route::post('/approuver-reservation/{id}', 'ReservationController@approuverReservation')->name('approuver.reservation');

////////////////////////////////////////////////////
/*rechercher*/
//////////////////////////////////////////////////

Route::get('/rechercher', 'HoteleController@recherche')->name('rechercher');