<?php

/**
 *	Exquisite
 *
 *	Start from here, build future growth and achievements.
 *
 *	@var		string
 */
define('OFCOLD', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

/**
 *	Registration System Service Framework
 *
 *	After the development of the package, merge! Remove the composer. Completed by a few files that are simply compressed!
 */
require OFCOLD . 'ofcold/system.php';

/**
 *	Create The Application
 *
 *	The first thing we will do is create a new ofcold application instance which serves as the "glue" for all the
 *	components of Ofcold, and is the IoC container for the system binding all of the various parts.
 *
 *	@var		\Ofcold\Foundation\Application
 */
$app = new Ofcold\Foundation\Application();

/**
 *	Bind Important Interfaces
 *
 *	Next, we need to bind some important interfaces into the container so we will be able to resolve them when needed.
 *	The kernels serve the incoming requests to this application from both the web and CLI.
 */
$app->singleton(Ofcold\Http\Kernel\Contracts\KernelInterface::class, Ofcold\Http\Kernel\Kernel::class);

$app->singleton(Ofcold\Console\Contracts\KernelInterface::class, Ofcold\Console\Kernel::class);

$app->singleton(Ofcold\Exceptions\Contracts\ExceptionHandlerInterface::class, Ofcold\Exceptions\Handler::class);

/**
 *	Return The Application
 *
 *	This script returns the application instance. The instance is given to the calling script so we can separate the
 *	building of the instances from the actual running of the application and sending responses.
 */
return $app;
