<?php

use App\Models\Adress;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //  return view('welcome');
    $user = User::find(1);
    $post = Post::find(4);
    $adress=Adress::find(1);
    //  return $user->images()->create([
    //     'image' => 'test image',

    // ]);
//     return $user->posts()->create([
//         'title' => 'test title',
//          'description' => 'test description'
//     ]);
//

//return $user->posts->title();
//  $post = Post::find(4);
//return  $post->title;
//   return $user->name;
// return $post->user->name;
// return $user->adresses()->create([
//     'adress'=>'khulna'
// ]);
//return $user->adresses->adress;
//return $user->addresses->adress;
return $adress->adress;

});
