<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke($user)
    {
        $user = User::find($user);
        $roles = User::getRoles();
        return view('admin.users.edit',compact('user','roles'));
    }
}
