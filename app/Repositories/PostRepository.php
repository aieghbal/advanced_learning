<?php
namespace App\Repositories;

use App\Models\Post;

class PostRepository implements PostRepositoryInterfacey
{
    public function all()
    {
        return Post::all();
    }
}
?>
