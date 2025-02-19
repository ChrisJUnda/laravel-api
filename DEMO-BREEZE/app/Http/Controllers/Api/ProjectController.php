<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        $posts = Post::all();
        return response()->json([
            'status' => 'success',
            'results' => $posts
        ]);
    }
}
