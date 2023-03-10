<?php

require 'Validator.php';


$config = require('config.php');
$db = new Database($config['datadase']);

$heading = "Create Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    //  we call "string" method directly as it is pure so and static
    if (! Validator::string($_POST['body'], 1, 100)) {
        $errors['body'] = 'A body of no more then 100 characters is requierd.';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require 'views/create-note.view.php';
