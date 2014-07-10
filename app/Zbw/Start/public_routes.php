<?php

//auth routes
Route::get(
  'login',
  ['as' => 'login', 'uses' => 'SessionsController@oauthLogin']
);
Route::post(
  'login',
  ['as' => 'login', 'uses' => 'SessionsController@postLogin']
);
Route::get('auth', ['as' => 'auth', 'uses' => 'SessionsController@oauthLogin']);
Route::get(
  'logout',
  ['as' => 'logout', 'uses' => 'SessionsController@getLogout']
);
Route::controller('password', 'RemindersController');
Route::controller('forums', 'ForumsController');


//top level pages
Route::get('/', ['as' => 'home', 'uses' => 'ZbwController@getIndex']);
Route::get(
  'pilots',
  ['as' => 'pilots', 'uses' => 'ZbwController@getPilotIndex']
);
Route::get('pilots/news', ['as' => 'pilot-news', 'uses' => 'NewsController@getPilotNews']);
Route::get(
  'controllers',
  ['as' => 'controllers', 'uses' => 'ZbwController@getControllerIndex']
);
Route::get(
  'training',
  ['as' => 'training', 'uses' => 'TrainingController@getIndex']
);
Route::get(
  'controllers/{id}',
  ['as' => 'controllers/{id}', 'uses' => 'UsersController@getController']
);
Route::get(
  'roster/results',
  ['roster/search', 'uses' => 'UsersController@getSearchResults']
);
Route::get('news/{id}', ['as' => 'news/{id}', 'uses' => 'NewsController@show']);
Route::get(
  'pages/p/{id}',
  ['as' => 'p/{id}', 'uses' => 'PagesController@getPage']
);

Route::get('roster', ['as' => 'roster', 'uses' => 'RosterController@getPublicRoster']);