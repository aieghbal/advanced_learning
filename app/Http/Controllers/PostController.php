<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Repositories\PostRepositoryInterface;

class PostController extends Controller
{
    public function index(PostRepositoryInterface $postRepository)
    {
        return $postRepository->all();
    }
}
