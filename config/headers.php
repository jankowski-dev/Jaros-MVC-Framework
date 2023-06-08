<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: text/html');
}