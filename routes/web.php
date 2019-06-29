<?php

//web
Route::get('/', 'Web\FrontController@index')->name('index');
Route::get('/login', 'Web\FrontController@login')->name('login');

Route::get('/blog', 'Web\BlogController@blog')->name('blog');
Route::get('/blog/{slug}', 'Web\BlogController@post');

Route::post('newsletter', 'School\NewsLetterController@store')->name('newsLetter');

//envio mail
Route::post('sendemail', 'School\SendMailController@ship')->name('sendemail');

Route::post('contactmail', 'ContactMailController@send')->name('contactmail');


Auth::routes();

//jardin
Route::middleware(['auth', 'ActiveStatus', 'Account'])->group(function () {

    Route::get('school/home', 'School\HomeController@view')->name('home');
    Route::resource('school/salas', 'School\RoomController');

    Route::resource('school/estudiantes', 'School\StudentController');
    Route::resource('school/profesores', 'School\TeacherController');
    Route::resource('school/tutores', 'School\TutorController');

    Route::resource('school/calendario', 'School\CalendarController');

    Route::patch('school/perfil/actualizar/colegio/{id}', 'School\SchoolController@updateSchool')->name('actualizar.colegio');
    Route::patch('school/perfil/actualizar/usuario/{id}', 'School\SchoolController@updateUser')->name('actualizar.usuario');
    Route::resource('school/perfil', 'School\SchoolController');

    Route::resource('school/mensajes', 'School\MessageController');
    Route::get('school/mensajes/responder/{id}', 'School\MessageController@respond')->name('responder');

    Route::resource('school/correo/enviados', 'School\ComunicationController');
    Route::get('school/correo/enviadosSala', 'School\ComunicationController@salaSent')->name('salaSent');
    Route::get('school/correo/enviados/sala/create', 'School\ComunicationController@salaCreate');
    Route::post('school/correo/enviados/sala/create', 'School\ComunicationController@salaStore')->name('salaStore');

    Route::resource('calendario', 'School\CalendarController');

    Route::resource('school/circulares', 'School\CircularController');
    Route::patch('school/circulares/disable/{id}', 'School\CircularController@disable')->name('disable.circular');
    Route::patch('school/circulares/active/{id}', 'School\CircularController@active')->name('active.circular');

});

//ROOT
Route::middleware(['auth'])->group(function () {
    Route::get('root/home', 'Root\HomeController@home')->name('root.home');

    Route::get('root/lista', 'Root\BlogController@list')->name('list');
    Route::get('root/lista/edit/{id}', 'Root\BlogController@show')->name('blog.show');
    Route::post('root/lista/update/{id}', 'Root\BlogController@update')->name('blog.update');
    Route::get('root/lista/create', 'Root\BlogController@create')->name('blog.create');
    Route::post('root/lista/store', 'Root\BlogController@store')->name('blog.store');
    Route::get('root/lista/active/{id}', 'Root\BlogController@active')->name('blog.active');
    Route::get('root/lista/desactive/{id}', 'Root\BlogController@desactive')->name('blog.desactive');
    Route::get('root/lista/delete/post/{id}', 'Root\BlogController@destroy')->name('blog.destroy');

    Route::get('root/lista/images', 'Root\PhotoController@photoList')->name('photo.list');
    Route::get('root/lista/addPhotoView', 'Root\PhotoController@addPhotoView')->name('photo.addPhotoView');
    Route::post('root/lista/add', 'Root\PhotoController@addPhoto')->name('photo.add');
    Route::get('root/lista/delete/photo/{id}', 'Root\PhotoController@destroy')->name('photo.destroy');
});

//tutor
Route::middleware(['auth'])->group(function () {

    Route::get('tutor/home', 'Tutor\HomeController@view')->name('home');

    Route::get('tutor/mensajes/mensajes-sala', 'Tutor\MessageController@messageSala')->name('messageSala');
    Route::resource('tutor/mensajes', 'Tutor\MessageController');
    Route::get('tutor/mensajes/responder/{id}', 'Tutor\MessageController@respond')->name('responder');

    Route::resource('tutor/eventos', 'Tutor\CalendarController');

    Route::resource('tutor/circulares', 'Tutor\CircularController');
});