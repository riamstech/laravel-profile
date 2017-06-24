<?php
Route::group(['middleware' => ['web']], function () {
    Route::group(['middleware' => config()->get('profile.middleware'),'prefix'=>config()->get('profile.prefix')], function () {
        Route::get('profile/', 'Berkayoztunc\LaravelProfile\LaravelProfileController@profile')->name('profile.index');
        Route::get('profile/information', 'Berkayoztunc\LaravelProfile\LaravelProfileController@information')->name('profile.information');
        Route::get('profile/activity', 'Berkayoztunc\LaravelProfile\LaravelProfileController@activity')->name('profile.activity');

        Route::post('profile/set-profile','Berkayoztunc\LaravelProfile\LaravelProfileController@setProfile');
        Route::post('profile/set-email','Berkayoztunc\LaravelProfile\LaravelProfileController@setEmail');
        Route::post('profile/set-password','Berkayoztunc\LaravelProfile\LaravelProfileController@setPassword');
        Route::post('profile/set-information','Berkayoztunc\LaravelProfile\LaravelProfileController@setAbout');
    });
});

Route::group(['middleware' => ['web']], function () {
    Route::group(['middleware' => config()->get('profile.middleware'),'prefix'=>config()->get('profile.prefix')], function () {
        Route::get('profile/', 'Berkayoztunc\LaravelProfile\LaravelProfileApiController@profile');
        Route::get('profile/activity', 'Berkayoztunc\LaravelProfile\LaravelProfileApiController@activity');
        Route::post('profile/set-profile','Berkayoztunc\LaravelProfile\LaravelProfileApiController@setProfile');
        Route::post('profile/set-email','Berkayoztunc\LaravelProfile\LaravelProfileApiController@setEmail');
        Route::post('profile/set-password','Berkayoztunc\LaravelProfile\LaravelProfileApiController@setPassword');
        Route::post('profile/set-information','Berkayoztunc\LaravelProfile\LaravelProfileApiController@setAbout');
    });
});
