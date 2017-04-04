<?php

namespace ORM\Http\Controllers;

use Illuminate\Http\Request;
use ORM\User;

class QueryController extends Controller
{

    public function eloquentAll() {
        $users = User::all();
        $title = 'Todos los usuarios con ALL';
        return view('query.methods', compact('users', 'title'));
    }

    public function eloquentGet($gender) {
        $users = User::where('gender', $gender)->get();
        $title = 'Lista de usuarios con GET';
        return view('query.methods', compact('users', 'title'));
    }

        public function eloquentGetCustom() {
            $users = User::where('gender', 'm')->get(['id', 'name', 'biography']);
            $title = 'Lista de usuarios con GET Custom - con Array';
            return view('query.methods', compact('users', 'title'));
        }

}
