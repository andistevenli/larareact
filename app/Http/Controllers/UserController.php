<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; //ketik

class UserController extends Controller
{
    public function index() {
        $response = Http::withHeaders([
            'app-id' => '65e3231fada74d19b832aba0'
        ]) -> get('https://dummyapi.io/data/v1/user?limit=5');

        $users = $response -> json()['data'];

        return view('users.index', compact('users'));
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $request -> validate([
            'firstName' => 'required|min:1|max:20',
            'lastName' => 'required',
            'email' => 'required|email'
        ]);

        $response = Http::post('https://dummyapi.io/data/v1/user/create',[
            'firstName' => $request -> firstName,
            'lastName' => $request -> lastName,
            'email' => $request -> email,
        ]);

        return redirect('/users/create') -> with('succes', 'Users created successfully');
    }
}
