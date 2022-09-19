<?php

$is_logged_in = false;

// echo $is_logged_in ? 'Welcome back!' : 'Hello There!';

// echo 'Welcome' . ($is_logged_in ? ' back!' : '!');

$name = null;

// echo isset($name) ? $name : 'Joe';
echo $name ?: 'Joe';