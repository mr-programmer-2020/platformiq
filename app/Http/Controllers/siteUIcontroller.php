<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Post;
use App\Category;
class siteUIcontroller extends Controller
{
    public function index(){

        return view('index')->with('blog_name',Setting::first()->blog_name)
                            ->with('categories',Category::take(5)->get())  //to take 5 elements only and get them from database
                            ->with('first_post',Post::orderBy('created_at','desc')->first() );
    }
}