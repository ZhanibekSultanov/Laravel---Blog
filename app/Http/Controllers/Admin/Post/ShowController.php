<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;

class ShowController extends BaseController
{
    public function __invoke($post)
    {
        $post = Post::find($post);
        return view('admin.posts.show',compact('post'));
    }
}
