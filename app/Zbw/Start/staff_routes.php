<?php
//
Route::group(['before'   => 'auth|staff'], function () {
		Route::group(['prefix' => 'staff'], function () {
				Route::get('live/{tsid}', 'TrainingController@testLiveSession');
				Route::post('live/{tsid}', 'TrainingController@postLiveSession');

				Route::get(
					'/',
					['as' => 'staff', 'uses' => 'AdminController@getAdminIndex']
				);
				Route::post(
					'exams/review/{eid}',
					[
						'as'   => 'exams/review/{eid}',
						'uses' => 'ExamsController@postComment'
					]
				);
				Route::get(
					'training',
					[
						'as'     => 'staff/training',
						'uses'   => 'TrainingController@getAdminIndex',
						'before' => 'cache.fetch',
						'after'  => 'cache.put'
					]
				);
				Route::get(
					'exams/review/{eid}',
					[
						'as'   => 'exams/review/{eid}',
						'uses' => 'ExamsController@getStaffReview'
					]
				);
				Route::get(
					'exams/questions',
					'ExamsController@getQuestions'
				);
				Route::post(
					'exams/questions',
					[
						'as'   => 'exams/add-question',
						'uses' => 'ExamsController@addQuestion'
					]
				);
				Route::get(
					'roster',
					['as' => 'roster', 'uses' => 'RosterController@getAdminIndex']
				);
				Route::post(
					'roster/groups/add',
					['as' => 'staff/roster/add-group', 'uses' => 'RosterController@postGroup']
				);
				Route::post(
					'roster/groups/update',
					['as' => 'staff/roster/edit-group', 'uses' => 'RosterController@updateGroup']
				);
				Route::get(
					'roster/results',
					['roster/search', 'uses' => 'AdminController@getSearchResults']
				);
				Route::get(
					'u/{id}',
					['roster/user/{id}', 'uses' => 'UsersController@showUser']
				);
				Route::get(
					'{id}/edit',
					[
						'as'   => 'roster/user/{id}/edit',
						'uses' => 'RosterController@getEditUser'
					]
				);
				Route::post(
					'{id}/edit',
					[
						'as'   => 'roster/user/{id}/edit',
						'uses' => 'RosterController@postEditUser'
					]
				);
				Route::get(
					'roster/create-controller',
					[
						'as'   => 'roster/add',
						'uses' => 'RosterController@getAddController'
					]
				);
				Route::post(
					'roster/create-controller',
					[
						'as'   => 'roster/add',
						'uses' => 'RosterController@postAddController'
					]
				);
				Route::get(
					'pages',
					['as' => 'staff/pages', 'uses' => 'PagesController@getIndex']
				);
				Route::get('pages/create', ['as'  => 'staff/pages/create', 'uses'  => 'PagesController@getCreate']);
				Route::post('pages/create', ['as' => 'staff/pages/create', 'uses' => 'PagesController@postCreate']);
				Route::get(
					'forum',
					['as' => 'staff/forum', 'uses' => 'AdminController@getForumIndex']
				);
				Route::get(
					'ts',
					['as' => 'staff/ts', 'uses' => 'AdminController@getTsIndex']
				);

				Route::get(
					'news',
					['as' => 'staff/news', 'uses' => 'NewsController@getAdminIndex']
				);
				Route::get(
					'news/create',
					['as' => 'news/create', 'uses' => 'NewsController@getCreate']
				);
				Route::post(
					'news/create',
					['as' => 'news/create', 'uses' => 'NewsController@postCreate']
				);

				Route::get(
					'log',
					['as' => 'log', 'uses' => 'AdminController@getLog']
				);

				Route::get(
					'news/{id}/edit',
					['as' => 'news/{id}/edit', 'uses' => 'NewsController@getEdit']
				);
				Route::post(
					'news/edit',
					['as' => 'news/{id}/edit', 'uses' => 'NewsController@postEdit']
				);
				//this route is deprecated
				Route::post('/a/complete/{aid}', 'AjaxController@actionCompleted');

				Route::get(
					'pages/create',
					['as' => 'pages/create', 'uses' => 'PagesController@getCreate']
				);
				Route::get(
					'pages/view',
					['as' => 'pages/view', 'uses' => 'PagesController@getShow']
				);
				Route::get(
					'pages/trash',
					['as' => 'pages/trash', 'uses' => 'PagesController@getTrash']
				);

				Route::post(
					'pages/menus/create',
					['as' => 'menus/create', 'uses' => 'MenusController@postCreate']
				);
				Route::get(
					'pages/menus',
					['as' => 'menus', 'uses' => 'MenusController@getIndex']
				);
				Route::get(
					'pages/menus{mid}/edit',
					['as' => 'menus/{mid}/edit', 'uses' => 'MenusController@getUpdate']
				);
				Route::post(
					'pages/menus/{mid}/update',
					['as' => 'menus/{mid}/edit', 'uses' => 'MenusController@postUpdate']
				);
				Route::get(
					'pages/menus/{mid}/delete',
					['as' => 'menus/{mid}/delete', 'uses' => 'MenusController@postDelete']
				);
			}
		);
	}
);

Route::group(
	['before' => 'executive'],
	function () {
		Route::post(
			'/r/activate/{cid}',
			[
				'as'   => 'controllers/{cid}/active',
				'uses' => 'AjaxController@activateUser'
			]
		);
		Route::post(
			'/r/suspend/{cid}',
			[
				'as'   => 'controllers/{cid}/suspend',
				'uses' => 'AjaxController@suspendUser'
			]
		);
		Route::post(
			'/r/terminate/{cid}',
			[
				'as'   => 'controllers/{cid}/terminate',
				'uses' => 'AjaxController@terminateUser'
			]
		);
		Route::post(
			'/m/staff-welcome/{cid}',
			[
				'as'   => 'controllers/{cid}/staff-welcome',
				'uses' => 'AjaxController@sendStaffWelcome'
			]
		);
	}
);

Route::group(
	['before' => 'instructor'],
	function () {
		//TODO create routes
	}
);

Route::group(
	['before' => 'mentor'],
	function () {
		Route::post('/e/review/{eid}', 'AjaxController@postReviewComment');
		Route::get('staff/training/{id}', 'TrainingController@showAdmin');
	}
);