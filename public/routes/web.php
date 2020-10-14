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


Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
 /*
 Start route users
*/
Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/create','UserController@create')->name('/users/create' );
Route::get('users/destroy/{id}','UserController@destroy')->name('users/destroy');
Route::post('/users/store','UserController@store')->name('/users/store' );
Route::post('/users/Update','UserController@Update')->name('users.Update' );
Route::post('/users/updatestatus','UserController@Updatestatus')->name('users.updatestatus');
Route::post('/users/updateedit','UserController@updateedit')->name('users.updateedit');
 
/*
 end route users
*/
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

 /*
 Start route affiliates
*/
 Route::get('/affiliates','AffiliateController@index')->name('affiliates');
 Route::get('/affiliates/create','AffiliateController@create')->name('/affiliates/create' );
 Route::post('/affiliates/store','AffiliateController@store')->name('/affiliates/store' );
 Route::post('/affiliates/Update','AffiliateController@Update')->name('affiliates.Update');
 Route::post('/affiliates/updatestatus','AffiliateController@Updatestatus')->name('affiliates.updatestatus');
 Route::post('/affiliates/updateedit','AffiliateController@updateedit')->name('affiliates.updateedit');
// Route::post('affiliates/Delete','AffiliateController@Delete')->name('affiliates/Delete');
 Route::post('affiliates/get','AffiliateController@get')->name('affiliates/get');
 // Route::POST('affiliates/image','AffiliateController@Imageupdate')->name('affiliates/image');
  Route::get('affiliates/destroy/{id}','AffiliateController@destroy')->name('affiliates/destroy');
 /*
 end route affiliates
*/
/*
 Start route clients
*/
Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/clients/create','ClientController@create')->name('/clients/create' );
Route::get('clients/destroy/{id}','ClientController@destroy')->name('clients/destroy');
Route::post('/clients/store','ClientController@store')->name('/clients/store' );
Route::post('/clients/Update','ClientController@Update')->name('clients.Update' );
Route::post('/clients/updatestatus','ClientController@Updatestatus')->name('clients.updatestatus');
 Route::post('/clients/updateedit','ClientController@updateedit')->name('clients.updateedit');

/*
 end route clients
*/
 /*
 Start route bdm
*/
 Route::get('/bdm','BdmController@index')->name('bdm'); 
 Route::get('/bdm/create','BdmController@create')->name('/bdm/create' );
 Route::post('/bdm/store','BdmController@store')->name('/bdm/store' );
 Route::post('/bdm/Update','BdmController@Update')->name('bdm.Update' );
  Route::post('/bdm/updatestatus','BdmController@Updatestatus')->name('affiliates.updatestatus');
 Route::post('/bdm/updateedit','BdmController@updateedit')->name('bdm.updateedit');
Route::get('bdm/destroy/{id}','BdmController@destroy')->name('bdm/destroy');
 /*
 end route bdm
*/

/*
 Start route leads
*/
 Route::get('/leads','LeadController@index')->name('leads');
 Route::get('/leads/create','LeadController@create')->name('/leads/create' );
 Route::post('/leads/store','LeadController@store')->name('/leads/store' );
 Route::get('leads/destroy/{id}','LeadController@destroy')->name('leads/destroy');
 Route::post('/leads/Update','LeadController@Update')->name('leads.Update' );
 Route::post('/leads/updatestatus','LeadController@Updatestatus')->name('leads.updatestatus');
 Route::post('/leads/updateedit','LeadController@updateedit')->name('leads.updateedit');

 /*
 end route leads
*/

 /*
 Start route subscribers
*/
Route::get('/subscribers','SubscriberController@index')->name('subscribers');
Route::get('/subscribers/create','SubscriberController@create')->name('/subscribers/create' );
Route::post('/subscribers/store','SubscriberController@store')->name('/subscribers/store' );
Route::post('/subscribers/Update','SubscriberController@Update')->name('subscribers.Update' );
 Route::post('/subscribers/updatestatus','SubscriberController@Updatestatus')->name('subscribers.updatestatus');
 Route::post('/subscribers/updateedit','SubscriberController@updateedit')->name('subscribers.updateedit');
  Route::get('subscribers/destroy/{id}','subscribers@destroy')->name('subscribers/destroy');
 /*
 end route subscribers
*/

  /*
 Start route sales-agents
*/
Route::get('/sales-agents','SaleAgentController@index')->name('sales-agents');;
Route::get('/sales-agents/create','SaleAgentController@create')->name('/sales-agents/create' );
Route::post('/sales-agents/store','SaleAgentController@store')->name('/sales-agents/store' );
Route::post('/sales-agents/Update','SaleAgentController@Update')->name('sales-agents.Update' );
Route::post('/sales-agents/updatestatus','SaleAgentController@Updatestatus')->name('sales-agents.updatestatus');
 Route::post('/sales-agents/updateedit','SaleAgentController@updateedit')->name('sales-agents.updateedit');
  Route::get('sales-agents/destroy/{id}','SaleAgentController@destroy')->name('sales-agents/destroy');
 /*
 /*
 end route sales-agents
*/

   /*
 Start route referral-partner
*/
Route::get('/referral-partners','ReferralPartnerController@index')->name('referral-partners');
Route::get('/referral-partners/create','ReferralPartnerController@create')->name('/referral-partners/create' );
Route::post('/referral-partners/store','ReferralPartnerController@store')->name('/referral-partners/store' );
Route::post('/referral-partners/Update','ReferralPartnerController@Update')->name('referral-partners.Update' );
Route::post('/referral-partners/updatestatus','ReferralPartnerController@Updatestatus')->name('referral-partners.updatestatus');
 Route::post('/referral-partners/updateedit','ReferralPartnerController@updateedit')->name('referral-partners.updateedit');
  Route::get('referral-partners/destroy/{id}','ReferralPartnerController@destroy')->name('referral-partners/destroy');
 /*
 end route referral-partner
 */
   /*
 Start route contacts
*/
Route::get('/contacts','ContactController@index')->name('contacts');
Route::get('/contacts/create','ContactController@create')->name('/contacts/create' );
Route::post('/contacts/store','ContactController@store')->name('/contacts/store' );
Route::post('/contacts/Update','ContactController@Update')->name('contacts.Update' );
Route::post('/contacts/updatestatus','ContactController@Updatestatus')->name('contacts.updatestatus');
 Route::post('/contacts/updateedit','ContactController@updateedit')->name('contacts.updateedit');
  Route::get('contacts/destroy/{id}','ContactController@destroy')->name('contacts/destroy');
 /*
 end route contacts
 */

 /*
 Start route users
*/
Route::get('/projects', 'PropertieController@index')->name('projects');
Route::get('/projects/create','PropertieController@create')->name('/projects/create' );
Route::post('/projects/store','PropertieController@store')->name('/projects/store' );
Route::post('/projects/Update','PropertieController@Update')->name('projects.Update');
Route::post('/projects/updatestatus','PropertieController@Updatestatus')->name('projects.updatestatus');
Route::post('/projects/updateedit','PropertieController@updateedit')->name('projects.updateedit');
Route::post('projects/Delete','PropertieController@Delete')->name('projects/Delete');
Route::post('/projects/addfavourite','PropertieController@addfavourite')->name('/projects/addfavourite' );

 
/*
 end route users
*/
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('clear-compiled');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return view('auth.login');
});


Route::get('/testdesign','TestdesignController@index')->name('testdesign');