<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function update(Request $request, User $user)
    {
        $user->update($request->only(['name', 'type']));

        $this->validate($request, [
            'name' => 'required'
        ]);

        return redirect()->route('admin.profile')->with('info', 'Data');
    }
}
