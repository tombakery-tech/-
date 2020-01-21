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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'admin/NewsController@add');
    Route::get('profile/create', 'admin/ProfileController@add');
    Route::get('profile/edit', 'admin/ProfileController@edit');
});

//課題１URLとControllerやActionを紐付ける機能を何といいますか？→Routing

//課題２あなたが考える、group化をすることのメリットを考えてみてください。→
//一つのグループ化で多くの Routingが出来ること

//課題３「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。
// Route::get('XXX', 'XXX/AAAContoroller@bbb');

//課題４【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。web.phpを編集して、admin/profile/create にアクセスしたら ProfileController の add Action に、admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください。
//上記に追加
