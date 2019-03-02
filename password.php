<?php

//generating hash password
// echo password_hash('jcdagger',PASSWORD_DEFAULT,['cost' => 12]);

$password = '$2y$12$fJUwVQj9D7nYdRITyaZwl.Seg.uXQo7SWNKNz.c.C.4xoQOgEWzKS';
$submittedPassword = 'jcdagger';

//verify authenticated user or not
$result = password_verify($submittedPassword,$password);

var_dump($result);
