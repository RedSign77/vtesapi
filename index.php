<?php
	/**
	 * Vampire: the Eternal Struggle API
	 * @author      Németh Zoltán
	 * @license     MIT License
	 * @created     2018-02-19
	 * @version     0.1
	 * @description REST API for VtES administration and manage cards
	 * Requirement: PHP 7.1
	 */
	include_once 'vendor/autoload.php';

	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;

	$config = [
		'settings' => [
			'displayErrorDetails'               => true,
			'determineRouteBeforeAppMiddleware' => true,
			'debug'                             => true,
		],
	];

	$app = new Slim\App($config);

	$app->get('/', function (Request $request, Response $response, array $args) {

	});

	$app->run();
