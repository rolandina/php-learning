<?php

$users = App::get('database')->selectAll('user');
$tasks = App::get('database')->selectAll('todos');

require "views/index.view.php";