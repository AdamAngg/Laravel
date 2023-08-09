<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $files = File::files(resource_path("posts"));

    foreach($files as $file){

        $document = YamlFrontMatter::parseFile($file);

        $post[] = new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug,
        );
    }
   
    return view('posts', ['posts' => $post]);
});

Route::get('posts/{post}', function($slug) {

    return view('post', ['post' => Post::find($slug)]);
    

})->where('post', '[A-z_\-]+');

