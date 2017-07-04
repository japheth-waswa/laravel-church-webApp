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

define('site_name', 'Church Name');

Route::get('/', [
    'as' => 'homepage',
    'uses' => 'Frontend\MainController@index'
]);
Route::get('/about', 'Frontend\MainController@about');
Route::get('/about', [
    'as' => 'about',
    'uses' => 'Frontend\MainController@about'
]);

Route::get('/sermons', [
    'as' => 'sermons',
    'uses' => 'Frontend\MainController@sermon'
]);

Route::get('/events', [
    'as' => 'events',
    'uses' => 'Frontend\MainController@event'
]);
Route::post('/event-registar', [
    'as' => 'postEventRegister',
    'uses' => 'Frontend\MainController@postEventRegister'
]);

Route::get('/gallery', [
    'as' => 'gallery',
    'uses' => 'Frontend\MainController@gallery'
]);

Route::get('/blog', [
    'as' => 'blog',
    'uses' => 'Frontend\MainController@blog'
]);

Route::get('/blog/{urlkey}', [
    'as' => 'singleblog',
    'uses' => 'Frontend\MainController@singleblog'
]);
Route::post('/blog-comment', [
    'as' => 'postBlogComment',
    'uses' => 'Frontend\MainController@blogCommentPost'
]);

Route::get('/contacts', [
    'as' => 'contacts',
    'uses' => 'Frontend\MainController@contactus'
]);
Route::post('/contacts', [
    'as' => 'postContacts',
    'uses' => 'Frontend\MainController@contactPost'
]);

Route::get('/upcoming-schedule', [
    'as' => 'sundaySchedule',
    'uses' => 'Frontend\MainController@sundaySchedule'
]);

Route::post('/pagination', [
    'as' => 'postPagination',
    'uses' => 'Frontend\MainController@getPaginated'
]);
//Route::get('/', function () {
//    return view('app/contactus');
//});
//administrator routes
Route::group(['middleware' => ['auth'],'prefix' => 'admin'], function () {

    Route::get('/', [
        'as' => 'dashboard',
        'uses' => 'Admin\DashboardController@index'
    ]);

    Route::resource('settings', 'Admin\SettingsController', ['names' => [
            'create' => 'settings.create',
            'edit' => 'settings.edit'
        ], 'except' => ['store','show', 'index']]);

    Route::resource('user', 'Admin\UserController', ['names' => [
            'index' => 'user.list',
            'create' => 'user.create',
            'edit' => 'user.edit',
            'update' => 'user.update',
            'store' => 'user.store',
            'destroy' => 'user.destroy'
        ], 'except' => ['show']]);
    Route::get('user/blocked/{id}/{value}', [
        'as' => 'user.blocked',
        'uses' => 'Admin\UserController@blocked'
    ]);

    Route::resource('profile', 'Admin\ProfileController', ['names' => [
            'update' => 'profile.update',
            'edit' => 'profile.edit'
        ], 'except' => ['store','create','show', 'index']]);

    Route::resource('settings', 'Admin\SettingsController', ['names' => [
            'create' => 'settings.create',
            'edit' => 'settings.edit'
        ], 'except' => ['store','show', 'index']]);

    Route::resource('sermon', 'Admin\SermonController', ['names' => [
            'index' => 'sermon.list',
            'create' => 'sermon.create',
            'edit' => 'sermon.edit',
            'update' => 'sermon.update',
            'store' => 'sermon.store',
            'destroy' => 'sermon.destroy'
        ], 'except' => ['show']]);
    Route::get('sermon/visibility/{id}/{value}', [
        'as' => 'sermon.visibility',
        'uses' => 'Admin\SermonController@visiblity'
    ]);

    Route::resource('sermon', 'Admin\SermonController', ['names' => [
            'index' => 'sermon.list',
            'create' => 'sermon.create',
            'edit' => 'sermon.edit',
            'update' => 'sermon.update',
            'store' => 'sermon.store',
            'destroy' => 'sermon.destroy'
        ], 'except' => ['show']]);
    Route::get('sermon/visibility/{id}/{value}', [
        'as' => 'sermon.visibility',
        'uses' => 'Admin\SermonController@visiblity'
    ]);

    Route::resource('comment', 'Admin\CommentController', ['names' => [
            'index' => 'comment.list',
            'show' => 'comment.show',
            'destroy' => 'comment.destroy'
        ], 'except' => ['create','edit','update']]);
    Route::get('comment/visibility/{id}/{value}', [
        'as' => 'comment.visibility',
        'uses' => 'Admin\CommentController@visiblity'
    ]);

    Route::resource('contact', 'Admin\ContactController', ['names' => [
            'index' => 'contact.list',
            'show' => 'contact.show'
        ], 'except' => ['create','edit','update','destroy']]);

    Route::resource('slider', 'Admin\SliderController', ['names' => [
            'index' => 'slider.list',
            'create' => 'slider.create',
            'edit' => 'slider.edit',
            'update' => 'slider.update',
            'store' => 'slider.store',
            'destroy' => 'slider.destroy'
        ], 'except' => ['show']]);
    Route::get('slider/visibility/{id}/{value}', [
        'as' => 'slider.visibility',
        'uses' => 'Admin\SliderController@visiblity'
    ]);

    Route::resource('staff', 'Admin\StaffController', ['names' => [
            'index' => 'staff.list',
            'create' => 'staff.create',
            'edit' => 'staff.edit',
            'update' => 'staff.update',
            'store' => 'staff.store',
            'destroy' => 'staff.destroy'
        ], 'except' => ['show']]);
    Route::get('staff/visibility/{id}/{value}', [
        'as' => 'staff.visibility',
        'uses' => 'Admin\StaffController@visiblity'
    ]);

    Route::resource('donation', 'Admin\DonationController', ['names' => [
            'index' => 'donation.list',
            'create' => 'donation.create',
            'edit' => 'donation.edit',
            'update' => 'donation.update',
            'store' => 'donation.store',
            'destroy' => 'donation.destroy'
        ], 'except' => ['show']]);
    Route::get('donation/visibility/{id}/{value}', [
        'as' => 'donation.visibility',
        'uses' => 'Admin\DonationController@visiblity'
    ]);

    Route::resource('congregation', 'Admin\CongregationController', ['names' => [
            'index' => 'congregation.list',
            'create' => 'congregation.create',
            'edit' => 'congregation.edit',
            'update' => 'congregation.update',
            'store' => 'congregation.store',
            'destroy' => 'congregation.destroy'
        ], 'except' => ['show']]);


    /*     * admin blog/category route* */
    Route::resource('blog', 'Admin\BlogController', ['names' => [
            'index' => 'blog.list',
            'create' => 'blog.create',
            'edit' => 'blog.edit',
            'update' => 'blog.update',
            'store' => 'blog.store',
            'destroy' => 'blog.destroy'
        ], 'except' => ['show']]);
    Route::get('blog/visibility/{id}/{value}', [
        'as' => 'blog.visibility',
        'uses' => 'Admin\BlogController@visiblity'
    ]);

    Route::resource('blog-category', 'Admin\BlogcategoryController', ['names' => [
            'index' => 'blogcategory.list',
            'create' => 'blogcategory.create',
            'edit' => 'blogcategory.edit',
            'update' => 'blogcategory.update',
            'store' => 'blogcategory.store',
            'destroy' => 'blogcategory.destroy'
        ], 'except' => ['show']]);
    Route::get('blog-category/visibility/{id}/{value}', [
        'as' => 'blogcategory.visibility',
        'uses' => 'Admin\BlogcategoryController@visiblity'
    ]);

    /*     * admin sunday/schedule route* */
    Route::resource('sunday', 'Admin\SundayScheduleController', ['names' => [
            'index' => 'sunday.list',
            'show' => 'sunday.show',
            'create' => 'sunday.create',
            'edit' => 'sunday.edit',
            'update' => 'sunday.update',
            'store' => 'sunday.store',
            'destroy' => 'sunday.destroy'
        ]]);
    Route::get('sunday/visibility/{id}/{value}', [
        'as' => 'sunday.visibility',
        'uses' => 'Admin\SundayScheduleController@visiblity'
    ]);

    Route::resource('sunday-page', 'Admin\SundayPageController', ['names' => [
            'update' => 'sundaypage.update',
            'store' => 'sundaypage.store',
        ], 'except' => ['index','show','create','edit','destroy']]);
    Route::get('sunday-page/visibility/{id}/{value}/{parent}', [
        'as' => 'sundaypage.visibility',
        'uses' => 'Admin\SundayPageController@visiblity'
    ]);
    Route::get('sunday-page/create/{id}', [
        'as' => 'sundaypage.create',
        'uses' => 'Admin\SundayPageController@create'
    ]);
    Route::get('sunday-page/edit/{id}/{parent}', [
        'as' => 'sundaypage.edit',
        'uses' => 'Admin\SundayPageController@edit'
    ]);
    Route::get('sunday-page/destroy/{id}/{parent}', [
        'as' => 'sundaypage.destroy',
        'uses' => 'Admin\SundayPageController@destroy'
    ]);
    Route::patch('sunday-page/number-pages/{parent}', [
        'as' => 'sundaypage.orderpages',
        'uses' => 'Admin\SundayPageController@orderPages'
    ]);
    /*     * admin event/category route* */
    Route::resource('event', 'Admin\EventController', ['names' => [
            'index' => 'event.list',
            'create' => 'event.create',
            'edit' => 'event.edit',
            'update' => 'event.update',
            'store' => 'event.store',
            'destroy' => 'event.destroy',
            'show' => 'event.show'
        ]]);
    Route::get('event/visibility/{id}/{value}', [
        'as' => 'event.visibility',
        'uses' => 'Admin\EventController@visiblity'
    ]);
    Route::resource('event-category', 'Admin\EventcategoryController', ['names' => [
            'index' => 'eventcategory.list',
            'create' => 'eventcategory.create',
            'edit' => 'eventcategory.edit',
            'update' => 'eventcategory.update',
            'store' => 'eventcategory.store',
            'destroy' => 'eventcategory.destroy'
        ], 'except' => ['show']]);
    Route::get('event-category/visibility/{id}/{value}', [
        'as' => 'eventcategory.visibility',
        'uses' => 'Admin\EventcategoryController@visiblity'
    ]);
    /*     * admin gallery route* */
    Route::resource('gallery', 'Admin\GalleryController', ['names' => [
            'index' => 'gallery.list',
            'create' => 'gallery.create',
            'edit' => 'gallery.edit',
         'update' => 'gallery.update',
            'store' => 'gallery.store',
            'destroy' => 'gallery.destroy'
        ], 'except' => ['show']]);
    Route::get('gallery/visibility/{id}/{value}', [
        'as' => 'gallery.visibility',
        'uses' => 'Admin\GalleryController@visiblity'
    ]);
      Route::get('gallery-manage-images/{id}', [
        'as' => 'gallery.manageimages',
        'uses' => 'Admin\GalleryController@manageImages'
    ]);
    Route::patch('gallery-manage-images/{id}', [
        'as' => 'gallery.storemanagedimages',
        'uses' => 'Admin\GalleryController@manageImageStore'
    ]);
    Route::delete('gallery-manage-images/{id}', [
        'as' => 'gallery.deletemanagedimages',
        'uses' => 'Admin\GalleryController@deleteImageCollection'
    ]);
    Route::resource('gallery-category', 'Admin\GallerycategoryController', ['names' => [
            'index' => 'gallerycategory.list',
            'create' => 'gallerycategory.create',
            'edit' => 'gallerycategory.edit',
            'update' => 'gallerycategory.update',
            'store' => 'gallerycategory.store',
            'destroy' => 'gallerycategory.destroy'
        ], 'except' => ['show']]);
    Route::get('gallery-category/visibility/{id}/{value}', [
        'as' => 'gallerycategory.visibility',
        'uses' => 'Admin\GallerycategoryController@visiblity'
    ]);
  
});

Auth::routes();

Route::get('/home', 'HomeController@index');
