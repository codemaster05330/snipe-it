<?php

# User Management
Route::group([ 'prefix' => 'users', 'middleware' => ['web','auth']], function () {

    Route::get('ldap', ['as' => 'ldap/user', 'uses' => 'UsersController@getLDAP' ]);
    Route::post('ldap', 'UsersController@postLDAP');
    Route::get('import', [ 'as' => 'import/user', 'uses' => 'UsersController@getImport' ]);
    Route::post('import', [ 'uses' => 'UsersController@postImport' ]);
    Route::get('export', [ 'as' => 'users.export', 'uses' => 'UsersController@getExportUserCsv' ]);
    Route::get('{userId}/clone', [ 'as' => 'clone/user', 'uses' => 'UsersController@getClone' ]);
    Route::post('{userId}/clone', [ 'uses' => 'UsersController@postCreate' ]);
    Route::get('{userId}/restore', [ 'as' => 'restore/user', 'uses' => 'UsersController@getRestore' ]);
    Route::get('{userId}/unsuspend', [ 'as' => 'unsuspend/user', 'uses' => 'UsersController@getUnsuspend' ]);
    Route::post('{userId}/upload', [ 'as' => 'upload/user', 'uses' => 'UsersController@postUpload' ]);
    Route::get(
        '{userId}/deletefile/{fileId}',
        [ 'as' => 'delete/userfile', 'uses' => 'UsersController@getDeleteFile' ]
    );
    Route::get(
        '{userId}/showfile/{fileId}',
        [ 'as' => 'show/userfile', 'uses' => 'UsersController@displayFile' ]
    );

    Route::post(
        'bulkedit',
        [
            'as'   => 'users/bulkedit',
            'uses' => 'UsersController@postBulkEdit',
        ]
    );
    Route::post(
        'bulksave',
        [
            'as'   => 'users/bulksave',
            'uses' => 'UsersController@postBulkSave',
        ]
    );
    Route::post(
        'bulkeditsave',
        [
            'as'   => 'users/bulkeditsave',
            'uses' => 'UsersController@postBulkEditSave',
        ]
    );


});

Route::resource('users', 'UsersController', [
    'parameters' => ['user' => 'user_id']
]);
