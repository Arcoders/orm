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

        public function eloquentDelete($id) {
            $user = User::find($id);
            $user->delete();
            return view('pages.delete');
        }

        public function eloquentLists() {
            $users = User::orderBy('name', 'ASC')->pluck('name', 'id');
            return view('query.lists', compact('users'));
        }

        public function eloquentFirstLast() {
            $first = User::first();
            $all = User::all();
            $last = $all->last();
            return view('query.first-last', compact('first', 'last'));
        }

        public function eloquentPaginate() {
            $users = User::OrderBy('id', 'DESC')->paginate();
            return view('query.paginate', compact('users'));
        }

}
