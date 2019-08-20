<?php
//Route::get('/home', 'HomeController@index')->name('home');

//Route::Auth();

Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'login', 'middleware' => 'guest.admin'], function () {

        Route::get('/', 'admin\loginController@index')->name('admin.login');

        Route::post('/', 'admin\loginController@adminLogin')->name('admin.login.store');

    });

    Route::post('/logout', 'admin\loginController@logout')->name('admin.logout');

    Route::group(['middleware' => 'auth.admin'], function () {

        Route::get('/home', 'HomeController@index')->name('admin.home');

        Route::get('/', 'admin\AdminController@index')->name('admin.index');

        Route::get('/create', 'admin\AdminController@create')->name('admin.create');

        Route::post('/store', 'admin\AdminController@store')->name('admin.store');

        Route::get('{admin}/edit', 'admin\AdminController@edit')->name('admin.edit');

        Route::patch('{admin}/update', 'admin\AdminController@update')->name('admin.update');

        Route::delete('{admin}/delete', 'admin\AdminController@destroy')->name('admin.delete');

        Route::group(['prefix' => '/users'], function () {

            Route::get('/', 'admin\UsersController@index')->name('user.index');

            Route::get('/create', 'admin\UsersController@create')->name('user.create');

            Route::post('/store', 'admin\UsersController@store')->name('user.store');

            Route::get('{user}/edit', 'admin\UsersController@edit')->name('user.edit');

            Route::patch('{user}/update', 'admin\UsersController@update')->name('user.update');

            Route::delete('{user}/delete', 'admin\UsersController@destroy')->name('user.delete');

        });

        Route::group(['prefix' => '/instructors'], function () {

            Route::get('/', 'admin\instructorController@index')->name('instructor.index');

            Route::get('/create', 'admin\instructorController@create')->name('instructor.create');

            Route::post('/store', 'admin\instructorController@store')->name('instructor.store');

            Route::get('{instructor}/edit', 'admin\instructorController@edit')->name('instructor.edit');

            Route::put('{instructor}/update', 'admin\instructorController@update')->name('instructor.update');

            Route::delete('{instructor}/delete', 'admin\instructorController@destroy')->name('instructor.delete');

        });

   Route::group(['prefix'=>'/programs'],function(){

        Route::get('/','admin\ProgramController@index')->name('programe.index');

        Route::get('/store','admin\ProgramController@create')->name('programe.create');

        Route::post('/store','admin\ProgramController@store')->name('programe.store');

        Route::get('/{program}/edit','admin\ProgramController@edit')->name('programe.edit');

        Route::put('/{program}/update','admin\ProgramController@update')->name('programe.update');

        Route::delete('/{program}/delete','admin\ProgramController@destroy')->name('programe.delete');
    });

        Route::group(['prefix' => '/blogs'], function () {

            Route::get('/', 'admin\BlogsController@index')->name('blog.index');

            Route::get('/create', 'admin\BlogsController@create')->name('blog.create');

            Route::post('/store', 'admin\BlogsController@store')->name('blog.store');

            Route::get('{blog}/edit', 'admin\BlogsController@edit')->name('blog.edit');

            Route::patch('{blog}/update', 'admin\BlogsController@update')->name('blog.update');

            Route::delete('{blog}/delete', 'admin\BlogsController@destroy')->name('blog.delete');


            Route::get('/{blog}/comments/showblogcomments', 'admin\BlogCommentsController@show')->name('blogcomments.show');

            Route::patch('/{comment}/updateblogStatus', 'admin\BlogCommentsController@update')->name('blogcomment.update');


        });

        Route::group(['prefix' => '/courses'], function () {

            Route::get('/', 'admin\CoursesController@index')->name('course.index');

            Route::get('/create', 'admin\CoursesController@create')->name('course.create');

            Route::get('{course}/edit', 'admin\CoursesController@edit')->name('course.edit');

            Route::delete('{course}/delete', 'admin\CoursesController@destroy')->name('course.delete');

            Route::post('/store', 'admin\CoursesController@store')->name('course.store');

            Route::patch('{course}/update', 'admin\CoursesController@update')->name('course.update');

            Route::get('/addvideos', 'admin\CoursesController@addVideosToCourse')->name('coures.video.add');


            Route::get('/{course}/comments/showcoursecomments', 'admin\CourseCommentsController@show')->name('coursecomments.show');

            Route::patch('/{comment}/updateCourseStatus', 'admin\CourseCommentsController@update')->name('coursecomment.update');


        });

        Route::group(['prefix' => '/coupons'], function () {

            Route::get('/', 'admin\couponController@index')->name('coupon.index');

            Route::get('/create', 'admin\couponController@create')->name('coupon.create');

            Route::get('{coupon}/edit', 'admin\couponController@edit')->name('coupon.edit');

            Route::delete('{coupon}/delete', 'admin\couponController@destroy')->name('coupon.delete');

            Route::post('/store', 'admin\couponController@store')->name('coupon.store');

            Route::put('{coupon}/update', 'admin\couponController@update')->name('coupon.update');


        });

        Route::group(['prefix' => '/orders'], function () {

            Route::get('/', 'admin\OrdersController@show')->name('orders.index');

            Route::patch('/{order}/update', 'admin\OrdersController@update')->name('order.update');

        });

        Route::group(['prefix' => '/offers'], function () {

            Route::get('/', 'admin\offersController@index')->name('offers.index');

            Route::get('/create', 'admin\offersController@create')->name('offers.create');

            Route::post('/store', 'admin\offersController@store')->name('offers.store');

            Route::get('/{offer}/edit', 'admin\offersController@edit')->name('offers.edit');

            Route::patch('/{offer}/update', 'admin\offersController@update')->name('offers.update');

            Route::delete('/{offer}/delete', 'admin\offersController@destroy')->name('offers.delete');
        });

        Route::group(['prefix' => '/videos'], function () {

            Route::get('/', 'admin\videosController@index')->name('videos.index');

            Route::get('/create', 'admin\videosController@create')->name('videos.create');

            Route::post('/store', 'admin\videosController@store')->name('videos.store');

            Route::get('/{video}/edit', 'admin\videosController@edit')->name('videos.edit');

            Route::patch('/{video}/update', 'admin\videosController@update')->name('videos.update');

            Route::delete('/{video}/delete', 'admin\videosController@destroy')->name('videos.delete');
        });

        Route::group(['prefix' => '/categories'], function () {

            Route::get('/', 'admin\categoryController@index')->name('categories.index');

            Route::post('/store', 'admin\categoryController@store')->name('categories.store');

            Route::get('/{video}/edit', 'admin\categoryController@edit')->name('categories.edit');

            Route::patch('/{video}/update', 'admin\categoryController@update')->name('categories.update');

            Route::delete('/{video}/delete', 'admin\categoryController@destroy')->name('categories.delete');
        });

        Route::group(['prefix' => '/contacts'], function () {

            Route::get('/', 'admin\ContactController@index')->name('contacts.index');
        });

        Route::group(['prefix' => '/notifications'], function () {

            Route::get('/', 'admin\NotificationController@index')->name('notifications.index');

        });

        Route::group(['prefix' => '/settings'], function () {

            Route::get('/', 'admin\settingController@index')->name('settings.index');

            Route::get('/{setting}/edit', 'admin\settingController@edit')->name('setting.edit');

            Route::patch('/{setting}/update', 'admin\settingController@update')->name('setting.update');

        });


    });
});


Route::group(['prefix' => 'api'], function () {

    Route::post('/login', 'UserLoginApiController@userLogin')->name('user.login');

    Route::post('/register', 'UserLoginApiController@register')->name('user.register');

    Route::get('/courses', 'userCoursesApiController@index')->name('user.courses');
});
