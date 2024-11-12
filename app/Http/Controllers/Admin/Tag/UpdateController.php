<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,$tag)
    {
        $data = $request->validated();
        $tag = Tag::find($tag);
        $tag->update($data);
        return redirect()->route('admin.tag.show',$tag->id);
    }
}
