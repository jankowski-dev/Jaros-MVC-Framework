<?php

namespace App\Controllers;

class PostController {


    public function getAllPosts() {
        return 'Get all posts!';
    }

    public function getPostById($id) {
        return 'I need to get post with id =' . ' ' . $id;
    }
}