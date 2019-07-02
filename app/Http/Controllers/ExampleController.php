<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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

    //
}
