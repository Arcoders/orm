<?php

namespace ORM\Http\Controllers;

use Illuminate\Http\Request;
use ORM\User;

class PagesController extends Controller
{
    public function home() {
        $users = User::orderBy('id', 'DESC')->take(10)->get();
        return view('pages.home', compact('users'));
    }
}
