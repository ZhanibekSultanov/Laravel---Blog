<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class DeleteController extends BaseController
{
    public function __invoke($post)
    {
        $post = Post::find($post);
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
