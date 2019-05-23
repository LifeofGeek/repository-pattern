<?php

Route::get('posts/find-by', 'PostController@findBy')->name('post.findBy');
Route::resource('posts', 'PostController')->except(['create', 'edit']);