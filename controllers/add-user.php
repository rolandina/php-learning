<?php

App::get('database')->insert('user', [
    'username'=>$_POST['username'],
    'email'=>$_POST['email'],
    'password'=>$_POST['password'],
]);

header('Location: /');