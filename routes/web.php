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

Route::get('/', 'AdminController@index');

Auth::routes();

Route::get('/admin', 'AdminController@index');
Route::get('/home', 'AdminController@index');
Auth::routes();
Route::group(['middleware' => 'web'], function () {

    //user
    Route::get('user/search', ['as' => 'user.search','uses' => 'UserController@search']);
    Route::post('/user/store', [
        'uses' => 'UserController@store',
        'as' => 'user.store',
        'middleware' => 'roles',
        'roles' => ['action' => 'store', 'controller' => 'User']
    ]);
    Route::get('/user/create', [
        'uses' => 'UserController@create',
        'as' => 'user.create',
        'middleware' => 'roles',
        'roles' => ['action' => 'create', 'controller' => 'User']
    ]);
    Route::get('/user', [
        'uses' => 'UserController@index',
        'as' => 'user.index',
        'middleware' => 'roles',
        'roles' => ['action' => 'index', 'controller' => 'User']
    ]);
    Route::get('/user/{id}', [
        'uses' => 'UserController@show',
        'as' => 'user.show',
        'middleware' => 'roles',
        'roles' => ['action' => 'show', 'controller' => 'User']
    ]);
    Route::get('/user/{id}/edit', [
        'uses' => 'UserController@edit',
        'as' => 'user.edit',
        'middleware' => 'roles',
        'roles' => ['action' => 'edit', 'controller' => 'User']
    ]);
    Route::patch('/user/{id}/update', [
        'uses' => 'UserController@update',
        'as' => 'user.update',
        'middleware' => 'roles',
        'roles' => ['action' => 'update', 'controller' => 'User']
    ]);
    Route::delete('/user/{id}/destroy', [
        'uses' => 'UserController@destroy',
        'as' => 'user.destroy',
        'middleware' => 'roles',
        'roles' => ['action' => 'destroy', 'controller' => 'User']
    ]);

    //role
    Route::get('role/search', [
        'uses' => 'RoleController@search',
        'as' => 'role.search',
        'middleware' => 'roles',
        'roles' => ['action' => 'search', 'controller' => 'Role']
    ]);
    Route::get('/role', [
        'uses' => 'RoleController@index',
        'as' => 'role.index',
        'middleware' => 'roles',
        'roles' => ['action' => 'index', 'controller' => 'Role']
    ]);
    Route::get('/role/create', [
        'uses' => 'RoleController@create',
        'as' => 'role.create',
        'middleware' => 'roles',
        'roles' => ['action' => 'create', 'controller' => 'Role']
    ]);
    Route::get('/role/{id}', [
        'uses' => 'RoleController@show',
        'as' => 'role.show',
        'middleware' => 'roles',
        'roles' => ['action' => 'show', 'controller' => 'Role']
    ]);
    Route::get('/role/{id}/edit', [
        'uses' => 'RoleController@edit',
        'as' => 'role.edit',
        'middleware' => 'roles',
        'roles' => ['action' => 'edit', 'controller' => 'Role']
    ]);
    Route::patch('/role/{id}/update', [
        'uses' => 'RoleController@update',
        'as' => 'role.update',
        'middleware' => 'roles',
        'roles' => ['action' => 'update', 'controller' => 'Role']
    ]);
    Route::post('/role/store', [
        'uses' => 'RoleController@store',
        'as' => 'role.store',
        'middleware' => 'roles',
        'roles' => ['action' => 'store', 'controller' => 'Role']
    ]);
    Route::delete('/role/{id}/destroy', [
        'uses' => 'RoleController@destroy',
        'as' => 'role.destroy',
        'middleware' => 'roles',
        'roles' => ['action' => 'destroy', 'controller' => 'Role']
    ]);

    //ACL
    Route::get('/acl', [
        'uses' => 'ACL_Controller@index',
        'as' => 'acl.index',
        'middleware' => 'roles',
        'roles' => ['action' => 'index', 'controller' => 'ACL']
    ]);
    Route::get('/acl/{id}', [
        'uses' => 'ACL_Controller@show',
        'as' => 'acl.show',
        'middleware' => 'roles',
        'roles' => ['action' => 'show', 'controller' => 'ACL']
    ]);
    Route::get('/acl/create', [
        'uses' => 'ACL_Controller@create',
        'as' => 'acl.create',
        'middleware' => 'roles',
        'roles' => ['action' => 'create', 'controller' => 'ACL']
    ]);
    Route::get('/acl/{id}/edit', [
        'uses' => 'ACL_Controller@edit',
        'as' => 'acl.edit',
        'middleware' => 'roles',
        'roles' => ['action' => 'edit', 'controller' => 'ACL']
    ]);
    Route::post('/acl/store', [
        'uses' => 'ACL_Controller@store',
        'as' => 'acl.store',
        'middleware' => 'roles',
        'roles' => ['action' => 'store', 'controller' => 'ACL']
    ]);
    Route::get('/acl/{id}/update', [
        'uses' => 'ACL_Controller@update',
        'as' => 'acl.update',
        'middleware' => 'roles',
        'roles' => ['action' => 'update', 'controller' => 'ACL']
    ]);
    Route::delete('/acl/{id}/destroy', [
        'uses' => 'ACL_Controller@destroy',
        'as' => 'acl.destroy',
        'middleware' => 'roles',
        'roles' => ['action' => 'destroy', 'controller' => 'ACL']
    ]);
    Route::get('/permission', [
        'uses' => 'ACL_Controller@checkPermission',
        'as' => 'acl.permission',
    ]);
    //contact
    Route::get('/contact', [
        'uses' => 'ContactController@index',
        'as' => 'contact.index',
        'middleware' => 'roles',
        'roles' => ['action' => 'index', 'controller' => 'Contact']
    ]);

    //job
    Route::resource('job', 'JobsController');
    Route::post('/multi_checkboxes', 'JobsController@postMultiCheckboxes');
    Route::delete('/job/delete/{id}', ['as' => 'job.delete', 'uses' => 'JobsController@destroy']);

    //resource
    Route::get('resource/search', ['as' => 'resource.search', 'uses' => 'ResourceController@search']);
    Route::resource('resource', 'ResourceController');
});
Route::get('contact/search', ['as' => 'contact.search', 'uses' => 'ContactController@search']);
Route::resource('contact', 'ContactController');
