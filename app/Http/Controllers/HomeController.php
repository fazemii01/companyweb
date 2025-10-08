<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $recentPosts = [
            (object)['title' => 'Example Post 1', 'date' => 'October 1, 2025', 'author' => 'Cline Bot', 'category' => 'AI', 'image' => asset('assets/img/blog/blog-1.jpg')],
            (object)['title' => 'Example Post 2', 'date' => 'September 25, 2025', 'author' => 'Cline Bot', 'category' => 'Development', 'image' => asset('assets/img/blog/blog-2.jpg')],
            (object)['title' => 'Example Post 3', 'date' => 'September 18, 2025', 'author' => 'Cline Bot', 'category' => 'Laravel', 'image' => asset('assets/img/blog/blog-3.jpg')],
        ];

        return view('home', compact('recentPosts'));
    }
}
