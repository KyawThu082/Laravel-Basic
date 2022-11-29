<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostConroller extends Controller
{
    public function create()
    {
        // DB::table('posts')->insert([
        //     'title' => 'Second Post',
        //     'description' => 'Second Post Desc'
        // ]);

        // $posts = DB::table('posts')->get();
        // foreach ($posts as $post) {
        //     echo $post->description;
        // }

        // $post = DB::table('posts')->where('id', 1)->get();
        // return $post;

        // DB::table('posts')->where('id', 1)->update([
        //     'title' => 'First Post',
        //     'description' => 'First Post Description Update'
        // ]);
        // DB::table('posts')->where('id', 1)->delete();

        // Post::create([
        //     'title' => 'Third Post',
        //     'description' => 'Third Post Description'
        // ]); //Create

        // $posts = Post::all();
        // foreach ($posts as $post) {
        //     echo $post->title;
        // } Read

        // $post = Post::find(3);
        // return $post; Read

        // Post::find(3)->update([
        //     'title' => 'Second Post Update'
        // ]); Update

        // Post::destroy(3); Delete  
        $posts = Post::where("title", "Third Post")->first();
        return $posts;
    }
}
