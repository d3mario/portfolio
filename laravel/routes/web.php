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
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/showClients', function(){
    return view('showClients');
});

Route::get('/caseStudy/{id}', function(){
    $client = [
        'name' => 'Mobile Mod Center',
        'web' => 'www.local.com',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, porro deserunt praesentium consectetur consequuntur sit illum placeat eum. Repudiandae, facilis deserunt! Provident eius voluptate corporis et omnis, dolore laboriosam nostrum.',
        'images' => 'images/mobile-mod-center/images/mobile-mod-center-display-01.png'
    ];

    return view('caseStudy', [
        'client' => $client
        ]);
});

Route::get('/caseStudy', function(){
    return view('caseStudy');
});