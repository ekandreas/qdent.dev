<?php
include_once 'vendor/ekandreas/docker-laravel/recipe.php';

server('qdent.dev', 'default')
    ->env('container', 'laravel')
    ->stage('development');