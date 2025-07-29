<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginForm extends Controller
{
    //
    // function loginHandle(Request $request)
    // {
    //     $request->session()->put('email', $request->email);
    //     // $request->session()->put('password', $request->password);
    //     // return $request->input('email') . '<br> ' . $request->input('password');
    //     return redirect()->route('formHandle.profile');
    // }

    public function loginHandle(Request $request)
    {
        // Store email in session
        $request->session()->put('email', $request->email);

        // Flash message
        $request->session()->flash('message', 'Login successful!');

        return redirect()->route('formHandle.profile');
    }


    function logout(Request $request)
    {
        $request->session()->forget('email');
        // $request->session()->forget('password');

        // $request->session()->flush();
        // return "You have been logged out.";
        return redirect('/form');
    }
}
