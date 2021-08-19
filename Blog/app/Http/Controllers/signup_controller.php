<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class signup_controller extends Controller
{
    public function create()
    {
        return view('signup');
    }
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));


        return redirect()->to('/home');
    }
}
// }s
