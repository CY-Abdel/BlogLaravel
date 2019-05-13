<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function deconnecter() {
        // To log users out of your application
        Auth::logout();

        // recireger vers la page home apres logout
        return redirect('/');
    }
}
