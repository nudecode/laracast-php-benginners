<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    require 'controllers/index.php';
} else if ($uri === '/books' ) {
    require 'controllers/books.php';
} else if ($uri === '/authors' ) {
    require 'controllers/authors.php';
}
