<?php

class UsersController
{
    /**
     * Show all users.
     */
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        $tasks = App::get('database')->selectAll('todos');

        return view('users', compact('users'));
    }

    /**
     * Store a new user in the database.
     */
    public function store()
    {
        App::get('database')->insert('users', [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]);

        return redirect('users');
    }
}