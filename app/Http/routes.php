<?php

Route::get('/', 'WelcomeController@index');
Route::get('/dolon', 'WelcomeController@dolon');
Route::get('home', 'HomeController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/*Route::get('/about', 'AboutController@about');

Route::get('/blog', 'BlogController@index');

Route::get('/contact', 'ContactController@contact');

Route::get('/newuserprofile', 'NuserprofileController@index');

Route::get('/task/index', 'TaskController@index');


Route::get('article/create', 'ArticleController@create');


Route::get('layouts/newuserprofile', 'NuserprofileController@index');


Route::get('/searchResult.index', 'SearchResultController@search');


Route::get('/userprofile', 'UserController@userprofile');

Route::get('/newtimeline', 'NewTimelineController@newtimeline');


Route::get('/timeline', 'TimelineController@index');
Route::get('/timelineold', 'TimelineoldController@index');
Route::get('/faq', 'faqController@index');

Route::get('/blog-item', 'BlogItemController@index');
Route::get('/portfolio', 'PortfolioController@portfolio');
Route::get('/baby', 'BabyController@index');
Route::get('/ecommerce', 'EcommerceController@ecommerce');

Route::resource('contacts', 'ContactsController');
Route::model('contacts', 'Contact');
Route::model('contactImages', 'ContactImage');
Route::model('contactAddresses', 'ContactAddress');


Route::resource('projects', 'ProjectsController');
Route::resource('contactImages', 'ContactImagesController');
Route::resource('projects.tasks', 'TasksController');
Route::resource('contactAddresses', 'ContactAddressesController');

Route::model('tasks', 'Task');
Route::model('projects', 'Project');
Route::bind('tasks', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});
Route::bind('contacts', function($value, $route) {
    return App\Contact::wheresubject($value)->first();
});


Route::get('fileentry', 'FileEntryController@index');

Route::get('fileentry/get/{filename}', [
    'as' => 'getentry', 'uses' => 'FileEntryController@get']);

Route::post('fileentry/add',[
    'as' => 'addentry', 'uses' => 'FileEntryController@add']);*/
Route::resource('/voters', 'VotersController');
