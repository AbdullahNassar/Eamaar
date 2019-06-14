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

Route::get('/lang/{locale}', ['as' => 'site.lang', 'uses' => 'LangController@postIndex']);
Route::group(['namespace' => 'Site'], function () {
    Route::get('/', ['as' => 'site.home', 'uses' => 'HomeController@getIndex']);
    Route::get('/services', ['as' => 'site.services', 'uses' => 'ServicesController@getIndex']);
    Route::get('/service/{id}', ['as' => 'site.service', 'uses' => 'ServicesController@getService']);
    Route::get('/team', ['as' => 'site.team', 'uses' => 'TeamController@getIndex']);
    Route::get('/projects', ['as' => 'site.projects', 'uses' => 'ProjectsController@getIndex']);
    Route::get('/project/{id}', ['as' => 'site.project', 'uses' => 'ProjectsController@getProject']);
    Route::get('/pr/{p_id}', ['as' => 'site.pr', 'uses' => 'ServicesController@getService']);
    Route::get('/about', ['as' => 'site.about', 'uses' => 'AboutController@getIndex']);
    Route::get('/contact', ['as' => 'site.contact', 'uses' => 'ContactController@getIndex']);
    Route::post('/send', ['as' => 'site.message', 'uses' => 'ContactController@message']);
    Route::post('/subscribe', ['as' => 'site.subscribe', 'uses' => 'HomeController@subscribe']);
    
});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
        Route::get('/', 'AuthController@getIndex');
        Route::get('/login', 'AuthController@getIndex');
        Route::post('/login', 'AuthController@postLogin')->name('admin.login');
        Route::get('/logout', 'AuthController@getLogout')->name('admin.logout');
    });

    Route::group(['middleware' => 'auth.admin'], function () {
        Route::get('/home', ['as' => 'admin.home', 'uses' => 'HomeController@getIndex']);
        Route::get('/about', ['as' => 'admin.about', 'uses' => 'AboutController@getAbout']);
        Route::post('/about', ['as' => 'admin.about.post', 'uses' => 'AboutController@updateAbout']);
        Route::get('/contacts', ['as' => 'admin.contacts', 'uses' => 'ContactsController@getContacts']);
        Route::post('/contacts', ['as' => 'admin.contacts.update', 'uses' => 'ContactsController@updateContacts']);
        Route::get('/data', ['as' => 'admin.data', 'uses' => 'DataController@getData']);
        Route::post('/data', ['as' => 'admin.data.update', 'uses' => 'DataController@updateData']);

        Route::group(['prefix' => 'slider'], function () {
            Route::get('/index', ['as' => 'admin.slider', 'uses' => 'SliderController@getIndex']);
            Route::get('/add', ['as' => 'admin.slider.add', 'uses' => 'SliderController@getAdd']);
            Route::post('/add', ['as' => 'admin.slider.add', 'uses' => 'SliderController@insertSlider']);
            Route::get('/edit/{id}', ['as' => 'admin.slider.edit', 'uses' => 'SliderController@getSlider']);
            Route::post('/edit/{id}', ['as' => 'admin.slider.edit', 'uses' => 'SliderController@updateSlider']);
            Route::get('/delete/{id}', ['as' => 'admin.slider.delete', 'uses' => 'SliderController@deleteSlid']);
        });
        Route::group(['prefix' => 'services'], function () {
            Route::get('/index', ['as' => 'admin.services', 'uses' => 'ServicesController@getIndex']);
            Route::get('/add', ['as' => 'admin.services.add', 'uses' => 'ServicesController@getAdd']);
            Route::post('/add', ['as' => 'admin.services.add', 'uses' => 'ServicesController@insertService']);
            Route::get('/edit/{id}', ['as' => 'admin.service.edit', 'uses' => 'ServicesController@getService']);
            Route::post('/edit/{id}', ['as' => 'admin.service.edit', 'uses' => 'ServicesController@updateService']);
            Route::get('/delete/{id}', ['as' => 'admin.service.delete', 'uses' => 'ServicesController@deleteServ']);
            Route::get('/data', ['as' => 'admin.service.data', 'uses' => 'ServicesController@getData']);
            Route::post('/data', ['as' => 'admin.service.data.edit', 'uses' => 'ServicesController@updateData']);
        });
        Route::group(['prefix' => 'team'], function () {
            Route::get('/index', ['as' => 'admin.team', 'uses' => 'TeamController@getIndex']);
            Route::get('/add', ['as' => 'admin.team.add', 'uses' => 'TeamController@getAdd']);
            Route::post('/add', ['as' => 'admin.team.add', 'uses' => 'TeamController@insertTeam']);
            Route::get('/edit/{id}', ['as' => 'admin.team.edit', 'uses' => 'TeamController@getTeam']);
            Route::post('/edit/{id}', ['as' => 'admin.team.edit', 'uses' => 'TeamController@updateTeam']);
            Route::get('/delete/{id}', ['as' => 'admin.team.delete', 'uses' => 'TeamController@deleteTeam']);
        });
        Route::group(['prefix' => 'projects'], function () {
            Route::get('/index', ['as' => 'admin.projects', 'uses' => 'ProjectsController@getIndex']);
            Route::get('/add', ['as' => 'admin.project.add', 'uses' => 'ProjectsController@getAdd']);
            Route::post('/add', ['as' => 'admin.project.add', 'uses' => 'ProjectsController@insertProject']);
            Route::get('/edit/{id}', ['as' => 'admin.project.edit', 'uses' => 'ProjectsController@getProject']);
            Route::post('/edit/{id}', ['as' => 'admin.project.edit', 'uses' => 'ProjectsController@updateProject']);
            Route::get('/delete/{id}', ['as' => 'admin.project.delete', 'uses' => 'ProjectsController@deleteProject']);
            Route::get('/gallery', ['as' => 'admin.project.gallery', 'uses' => 'ProjectsController@getGallery']);
            Route::post('/gallery', ['as' => 'admin.project.images', 'uses' => 'ProjectsController@getPostImages']);
            Route::post('/addImages', ['as' => 'admin.project.addImages', 'uses' => 'ProjectsController@addImages']);
            Route::get('/deleteImg/{id}', ['as' => 'admin.project.deleteImg', 'uses' => 'ProjectsController@deleteImage']);
        });
        Route::group(['prefix' => 'stories'], function () {
            Route::get('/index', ['as' => 'admin.stories', 'uses' => 'StoriesController@getIndex']);
            Route::get('/add', ['as' => 'admin.story.add', 'uses' => 'StoriesController@getAdd']);
            Route::post('/add', ['as' => 'admin.story.add', 'uses' => 'StoriesController@insertStory']);
            Route::get('/edit/{id}', ['as' => 'admin.story.edit', 'uses' => 'StoriesController@getStory']);
            Route::post('/edit/{id}', ['as' => 'admin.story.edit', 'uses' => 'StoriesController@updateStory']);
            Route::get('/delete/{id}', ['as' => 'admin.story.delete', 'uses' => 'StoriesController@deleteS']);
        });
        Route::group(['prefix' => 'users'], function () {
            Route::get('/index', ['as' => 'admin.users', 'uses' => 'UsersController@getIndex']);
            Route::get('/add', ['as' => 'admin.user.add', 'uses' => 'UsersController@getAdd']);
            Route::post('/add', ['as' => 'admin.user.add', 'uses' => 'UsersController@insertUser']);
            Route::get('/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'UsersController@getUser']);
            Route::post('/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'UsersController@updateUser']);
            Route::get('/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'UsersController@deleteU']);
        });
        Route::group(['prefix' => 'clients'], function () {
            Route::get('/index', ['as' => 'admin.clients', 'uses' => 'ClientsController@getIndex']);
            Route::get('/add', ['as' => 'admin.client.add', 'uses' => 'ClientsController@getAdd']);
            Route::post('/add', ['as' => 'admin.client.add', 'uses' => 'ClientsController@insertClient']);
            Route::get('/edit/{id}', ['as' => 'admin.client.edit', 'uses' => 'ClientsController@getClient']);
            Route::post('/edit/{id}', ['as' => 'admin.client.edit', 'uses' => 'ClientsController@updateClient']);
            Route::get('/delete/{id}', ['as' => 'admin.client.delete', 'uses' => 'ClientsController@deleteC']);
        });
        Route::group(['prefix' => 'subscribers'], function () {
            Route::get('/index', ['as' => 'admin.subscribers', 'uses' => 'SubscribersController@getIndex']);
            Route::get('/send/{id}', ['as' => 'admin.subscriber.send', 'uses' => 'SubscribersController@getEmail']);
            Route::post('/sendMail', ['as' => 'sendMail', 'uses' => 'SubscribersController@sendEmail']);
            Route::get('/sendAll', ['as' => 'admin.subscriber.sendAll', 'uses' => 'SubscribersController@getAll']);
            Route::post('/sendAll', ['as' => 'admin.subscriber.sendAll', 'uses' => 'SubscribersController@sendAll']);
        });
        Route::get('/message', ['as' => 'admin.message', 'uses' => 'MessageController@getIndex']);
        Route::get('/reservation', ['as' => 'admin.reservation', 'uses' => 'ReservationController@getIndex']);
        Route::post('/upload', ['as' => 'admin.upload.post', 'uses' => 'UploadController@getPost']);
        Route::post('/uploads', 'DataController@dropzoneStore')->name('admin.dropzoneStore');
        Route::post('/upload/images', ['as' => 'admin.upload.images', 'uses' => 'ProjectsController@getPostImages']);
    });
});