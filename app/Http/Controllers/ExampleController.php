<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('age', ['only' => ['getUser']]);
    }

    public function generateKey()
    {
        return str_random(32);
    }

    public function fooExample()
    {
        return "Example Controller foo from method post";
    }

    public function getUser($id)
    {
        return "User id = $id";
    }

    public function getPost($cat1, $cat2)
    {
        return "Category 1 = " . $cat1 . ", Category 2 " . $cat2;
    }

    public function fooBar(Request $request)
    {
        if ($request->is('foo/bar')) {
            return "True";
        } else {
            return "false";
        }
        // return $request->path();
    }

    public function userProfile(Request $request)
    {
        // $user['name'] = $request->name;
        // $user['username'] = $request->username;
        // $user['password'] = $request->password;
        // $user['email'] = $request->email;

        // return $user;

        // return $request->all();

        // return $request->input('name', 'bertho');

        // if ($request->has(['name', 'email'])) {
        //     return "Success";
        // } else {
        //     return "Fail";
        // }

        // if ($request->filled(['name', 'email'])) {
        //     return "Success";
        // } else {
        //     return "Fail";
        // }

        return $request->only(['password', 'username']);
    }

    //
}
