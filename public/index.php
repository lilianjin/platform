<?php

declare(strict_types=1);

/**
 *	Turn On The Lights
 *
 *	We need to Ofcold PHP development, so let us turn on the lights. This bootstraps the framework and gets it ready
 *	for use, then it will load up this application so that we can run it and send the responses back to the browser and
 *	delight our users.
 */
$app = require __DIR__ . '/../bootstrap/app.php';

/**
 *	Run The Application
 *
 *	Once we have the application, we can handle the incoming request through the kernel, and send the associated response
 *	back to the client's browser allowing them to enjoy the creative and wonderful application we have prepared for them.
 */
$kernel = $app->make(Ofcold\Http\Kernel\Contracts\KernelInterface::class);

$response = $kernel->handle(
	$request = Ofcold\Http\Foundation\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);