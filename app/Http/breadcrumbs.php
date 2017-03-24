<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 22/03/2017
 * Time: 13:23
 */
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home Page', url('/'));
});

Breadcrumbs::register('user', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('user', route('user.index'));
});

Breadcrumbs::register('user.create', function($breadcrumbs) {
    $breadcrumbs->parent('user');
    $breadcrumbs->push('Create New User', route('user.create'));
});

Breadcrumbs::register('user.show', function($breadcrumbs, $id) {
    $user = App\User::find($id);
    $breadcrumbs->parent('user');
    $breadcrumbs->push($user->name, route('user.show', $user->id));
});

Breadcrumbs::register('user.edit', function($breadcrumbs, $id) {
    $user = App\User::find($id);
    $breadcrumbs->parent('user');
    $breadcrumbs->push($user->name, route('user.edit',$user->id));
});