<?php

namespace App\Http\Controllers;

use App\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class UserController
{

    public function changePassword(Request $request)
    {

        $validatedData = $request->validate([
            'password' => 'required|min:6|confirmed'
        ]);

        $user = auth()->user();
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        return redirect("/profile");
    }

}