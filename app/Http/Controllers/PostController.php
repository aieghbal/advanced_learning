<?php

namespace App\Http\Controllers;
use App\Repositories\PostRepositoryInterface;

class PostController extends Controller
{
    protected $postRepo;

    public function __construct(PostRepositoryInterface $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    public function index()
    {
        return response()->json($this->postRepo->all());
    }
}
