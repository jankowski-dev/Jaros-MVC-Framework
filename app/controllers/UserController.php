<?php

namespace App\Controllers;

class UserController {


    public function index() {
        return 'is working UserController with method index';
    }

    public function getUser($id) {
        return 'I need to get user with id =' . ' ' . $id;
    }
}