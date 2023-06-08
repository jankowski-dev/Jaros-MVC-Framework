<?php

namespace App\Controllers;

class PostController {


    public function getAllPosts() {
        return 'Get all posts!';
    }

    public function deleteAllPosts() {
        return 'delete all posts!';
    }

    public function getPostById($id) {
        $array_response = [
            'I need to get post with id =' . ' ' . $id,
            'I need to get post with id =' . ' ' . $id,
            'I need to get post with id =' . ' ' . $id,
            'I need to get post with id =' . ' ' . $id,
    ];
        return $array_response;
    }
}