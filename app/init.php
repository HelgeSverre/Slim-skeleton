<?php

require '../vendor/autoload.php';

// Start session
session_start();


// Configure the template directory and the template parser.
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig(),
    'templates.path' => '../app/views'
));


// Set the view to use Twig templates
$view = $app->view();
$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);


// Load the ini config file
$app->config = parse_ini_file("../app/config.ini");



// Setup the database connection using ReadBean ORM
RedBeanPHP\R::setup(
	"mysql:host={$app->config['db_host']};dbname={$app->config['db_name']}",
	$app->config['db_user'],
	$app->config['db_pass']
);




// Routes file
require('../app/routes.php');


// Run the application.
$app->run();