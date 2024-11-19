<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,$user)
    {
        $data = $request->validated();
        $user = User::find($user);
        $user->update($data);
        return redirect()->route('admin.user.show',$user->id);
    }
}
