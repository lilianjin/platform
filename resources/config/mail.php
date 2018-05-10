<?php

return [
	'driver'	=> env('MAIL_DRIVER', 'smtp'),
	'host'		=> env('MAIL_HOST', 'smtp.mxhichina.com'),
	'port'		=> env('MAIL_PORT', 465),
	'from'		=> [
		'address' => env('MAIL_FROM_ADDRESS', 'noreply@ofcold.com'),
		'name'    => env('MAIL_FROM_NAME', 'Ofocld')
	],
	'encryption' => env('MAIL_ENCRYPTION', 'ssl'),

	'username'	=> env('MAIL_USERNAME', 'noreply@ofcold.com'),

	'password'	=> env('MAIL_PASSWORD', ''),

	'sendmail'		=> '/usr/sbin/sendmail -bs',

	'markdown'		=> [
		'theme' => 'default',

		'paths' => [
			//'views/vendor/mail',
		],
	],

];
