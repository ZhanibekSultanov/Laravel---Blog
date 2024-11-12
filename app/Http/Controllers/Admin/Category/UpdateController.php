<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,$category)
    {
        $data = $request->validated();
        $category = Category::find($category);
        $category->update($data);
        return redirect()->route('admin.category.show',$category->id);
    }
}
