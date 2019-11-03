<?php


use gunsCMS\Blog\Post;
use Illuminate\Support\Str;

$factory->define(Post::class, function(Faker\Generator $faker){
    return [
        'identifier' => Str::random(12),
        'slug'  =>  Str::slug($faker->sentence),
        'title' =>  $faker->sentence,
        'body'  =>  $faker->paragraph,
        'extra' =>  json_encode(['test' =>  'value']),

    ];
});