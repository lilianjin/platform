<?php

return [

	'default'	 => env('DB_CONNECTION', 'mysql'),

	'connections' => [

		'mysql' => [
			'read'		=> [
				'host' => env('DB_HOST', '127.0.0.1'),
			],
			'write'	   => [
				'host' => env('DB_HOST', '127.0.0.1'),
			],
			'driver'		=> 'mysql',
			'database'		=> env('DB_DATABASE', 'ofcold'),
			'username'		=> env('DB_USERNAME', 'root'),
			'password'		=> env('DB_PASSWORD', ''),
			'port'			=> env('DB_PORT', '3306'),
			'unix_socket'	=> env('DB_SOCKET', ''),
			'charset'		=> 'utf8mb4',
			'collation'		=> 'utf8mb4_unicode_ci',
			'prefix'		=> env('DB_PREFIX', 'futing__'),
			'strict'		=> env('DB_STRICT', false),
			'engine'		=> null
		],

	],

	'migrations'  => 'migrations',

	'redis'	   => [

		'client' => 'phpredis',

		'cluster' => false,

		'default' => [
			'host'		=> env('REDIS_HOST', '127.0.0.1'),
			'password'	=> env('REDIS_PASSWORD', ''),
			'port'		=> env('REDIS_PORT', 6379),
			'database'	=> 0
		],

	],

];
