<?php

namespace ORM\Http\Controllers;

use Illuminate\Http\Request;
use ORM\User;

class QueryController extends Controller
{
    public function getAll() {
        $users = User::all();
        return view('query.all', compact('users'));
    }
}
