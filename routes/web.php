<?php
Route::get('/', function () { return redirect('/admin/home'); });

Route::resource('employee-management', 'EmployeeManagementController');
Route::get('/employees/data','EmployeeManagementController@data')->name('employees.data');
Auth::routes();

Route::post('employee-management/search', 'EmployeeManagementController@search')->name('employee-management.search');
  
Route::resource('events', 'EventsController');

Route::resource('registrations', 'EventsRegistrationController');
Route::post('registrations/search', 'EventsRegistrationController@search')->name('registrations.search');

Route::resource('bio', 'BiographyController');
Route::post('bio/search', 'BiographyController@search')->name('bio.search');

Route::resource('member', 'MemberController');

Route::resource('institution', 'InstitutionalController');

Route::resource('membership', 'MembershipController');

Route::post('membership/search', 'MembershipController@search')->name('membership.search');

Route::resource('system-management/department', 'DepartmentController');
Route::post('system-management/department/search', 'DepartmentController@search')->name('department.search');

Route::resource('system-management/companies', 'CompaniesController');
Route::post('system-management/companies/search', 'CompaniesController@search')->name('companies.search');

Route::resource('system-management/division', 'DivisionController');
Route::post('system-management/division/search', 'DivisionController@search')->name('division.search');

Route::resource('system-management/country', 'CountryController');
Route::post('system-management/country/search', 'CountryController@search')->name('country.search');

Route::resource('system-management/state', 'StateController');
Route::post('system-management/state/search', 'StateController@search')->name('state.search');

Route::resource('system-management/city', 'CityController');
Route::post('system-management/city/search', 'CityController@search')->name('city.search');

Route::get('system-management/report', 'ReportController@index');
Route::post('system-management/report/search', 'ReportController@search')->name('report.search');
Route::post('system-management/report/excel', 'ReportController@exportExcel')->name('report.excel');
Route::post('system-management/report/pdf', 'ReportController@exportPDF')->name('report.pdf');

Route::get('avatars/{name}', 'EmployeeManagementController@load');

Route::resource('clients','ClientsController');
Route::get('/clients/data','ClientsController@data')->name('clients.data');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

// Registration Routes..
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
$this->post('register', 'Auth\RegisterController@register')->name('auth.register');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');

    Route::resource('subscriptions', 'Admin\SubscriptionsController');
    Route::resource('payments', 'Admin\PaymentsController');
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('folders', 'Admin\FoldersController');
    Route::post('folders_mass_destroy', ['uses' => 'Admin\FoldersController@massDestroy', 'as' => 'folders.mass_destroy']);
    Route::post('folders_restore/{id}', ['uses' => 'Admin\FoldersController@restore', 'as' => 'folders.restore']);
    Route::delete('folders_perma_del/{id}', ['uses' => 'Admin\FoldersController@perma_del', 'as' => 'folders.perma_del']);
    Route::resource('files', 'Admin\FilesController');
    Route::get('/{uuid}/download', 'Admin\DownloadsController@download');
    Route::post('files_mass_destroy', ['uses' => 'Admin\FilesController@massDestroy', 'as' => 'files.mass_destroy']);
    Route::post('files_restore/{id}', ['uses' => 'Admin\FilesController@restore', 'as' => 'files.restore']);
    Route::delete('files_perma_del/{id}', ['uses' => 'Admin\FilesController@perma_del', 'as' => 'files.perma_del']);
    Route::post('/spatie/media/upload', 'Admin\SpatieMediaController@create')->name('media.upload');
    Route::post('/spatie/media/remove', 'Admin\SpatieMediaController@destroy')->name('media.remove');



 
});
