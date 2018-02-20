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

	const APP_NAME = 'Vampire: the Eternal Struggle API';
	const APP_VERSION = '0.1';
	const APP_CREATED = '2018-02-19';
	const APP_CREATOR = 'Németh Zoltán';
	const APP_CONTACT = 'signred@gmail.com';

	$config = [
		'settings' => [
			'displayErrorDetails'               => true,
			'determineRouteBeforeAppMiddleware' => true,
			'debug'                             => true,
		],
	];

	/** @var Slim\App $app */
	$app = new Slim\App($config);

	$app->get('/', function (Request $request, Response $response, array $args) {
		$response->withStatus(200)
			->getBody()->write(json_encode([
				'application' => APP_NAME,
				'version' => APP_VERSION,
				'created' => APP_CREATED,
				'creator' => APP_CREATOR,
				'contact' => APP_CONTACT,
			]));
		return $response;
	});

	$app->run();
