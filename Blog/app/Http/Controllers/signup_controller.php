<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\DB;


class signup_controller extends Controller
{
    public function create()
    {
        return view('signup');
    }
    // store method holds data entered by the user
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // In below line data will be stored in database
        $user = User::create(request(['name', 'email', 'password']));
        // After data stored in database we are redirected to homepage
        return redirect()->to('/home');
    }
    public function userValidation(Request $req)
    {

        $pass = DB::table('users')->where('name', $req->uname)->first();

        if ($pass != null && $pass->password == $req->psw)

            return redirect()->to('/home');

        else

            echo "<h3>Unsuccessfull!!</h3>";
    }
}
