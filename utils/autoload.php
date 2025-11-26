<?php

$controllers = glob(CONTROLLERS . '/*.php');
$models = glob(MODELS . '/*.php');
$repositories = glob(REPOSITORIES . '/*.php');

require 'src/models/EntityModel.php';
require 'src/repositories/BaseRepository.php';

foreach ($controllers as $controller) {
    require_once($controller);
}

foreach ($models as $model) {
    require_once($model);
}

foreach ($repositories as $repository) {
    require_once($repository);
}

// var_dump($controllers, $models, $repositories); die(); 