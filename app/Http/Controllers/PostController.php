<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;

class PostController extends Controller
{
    public function index(PostRepository $postRepository)
    {
        return $postRepository->all();
    }
}
