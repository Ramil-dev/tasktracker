<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    /**
     * Store a newly created user in storage.
     */
    public function Create(Request $request)
    {
        return User::create($request->all());
    }

    /**
     * Update the specified user in storage.
     */
    public function Update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return $user;
    }

    /**
     * Remove the specified user from storage.
     */
    public function Destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return 204;
    }
}
