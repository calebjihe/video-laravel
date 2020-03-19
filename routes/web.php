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
/*
use App\Video;

Route::get('/', function () {
    $videos=Video::all();
    foreach ($videos as $video) {
        echo $video->title;
       // var_dump($video);
       echo $video->user->email.'<br/>';
    //    var_dump($video->comments);
        foreach ($video->comments as $comment) {
            echo $comment->body;
        }
        echo "<hr/>";
    }
    die();
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas del controllador  de Videos 
Route::get('crear-video', array(
    'as'=> 'createVideo',
    'middleware' =>  'auth',
    'uses'=>'VideoController@createVideo'
));
Route::post('guardar-video', array(
    'as'=> 'saveVideo',
    'middleware' =>  'auth',
    'uses'=>'VideoController@saveVideo'
));

Route::get('/miniatura/{filename}', array(
    'as' => 'imagevideo',
    'uses' => 'VideoController@getImagen'
));
Route::get('video/{video_id}',array(
    'as' => 'detailVideo',
    'uses' => 'VideoController@getVideoDetail'
));

Route::get('/video-file/{filename}', array(
    'as' => 'fileVideo',
    'uses' => 'VideoController@getVideo'
));
Route::get('/delete-video/{video_id}', array(
    'as' => 'videoDelete',
    'middleware' => 'auth',
    'uses' => 'VideoController@delete'
));
Route::get('/editar-video/{video_id}', array(
    'as' => 'videoEdit',
    'middleware' => 'auth',
    'uses' => 'VideoController@edit'
));
Route::post('update-video/{video_id}', array(
    'as'=> 'updateVideo',
    'middleware' =>  'auth',
    'uses'=>'VideoController@update'
));

Route::get('/buscar/{search?}',[
    'as'=>'videoSearch',
    'uses'=>'VideoController@search'
]);
//Comentarios
Route::post('/comment',array(
    'as'=> 'comment',
    'middleware' => 'auth',
    'uses'=> 'CommentController@store'
));

Route::get('/delete-comment/{comment_id}',array(
    'as'=> 'commentDelete',
    'middleware' => 'auth',
    'uses'=> 'CommentController@delete'
));

