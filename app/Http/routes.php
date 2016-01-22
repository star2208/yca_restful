<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->welcome();
});
$app->get('app/startup', ['uses' => 'AppController@startup']);
$app->get('article/topics', [ 'uses' => 'ArticleController@topics']);
$app->get('homepage', [ 'uses' => 'ArticleController@homepage']);
$app->get('topic', [ 'uses' => 'ArticleController@topic']);
$app->get('article/article', [ 'uses' => 'ArticleController@article']);