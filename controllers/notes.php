<?php

$config = require('config.php');
$db = new Database($config['datadase']);

$heading = 'Notes';

$notes = $db->query('select * from notes', [])->get();


require 'views/notes.view.php';