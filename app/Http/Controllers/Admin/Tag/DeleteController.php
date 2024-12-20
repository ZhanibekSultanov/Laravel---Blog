<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class DeleteController extends Controller
{
    public function __invoke($tag)
    {
        $tag = Tag::find($tag);
        $tag->delete();
        return redirect()->route('admin.tag.index');
    }
}
