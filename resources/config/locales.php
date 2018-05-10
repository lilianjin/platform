<?php

return [
	'default'          => env('APP_LOCALE_KEY', 'cn'),
	'fallback_default' => 'cn',
	'enabled'          => explode(',', env('ENABLED_LOCALES', 'cn,us')),
	'supported'        => [

		'cn' => [
			'slug'			=> 'china',
			'alias'			=> 'cn',
			'name'			=> [
				'zh-cn'	=> '中国',
				'zh-tw'	=> '中國',
				'en'	=> 'People\'s Republic of China',
			],
			'iso'		 => 'zh-cn',
			'translator' => [
				'slug'		=> 'zh-cn',
				'browser'	=> 'zh-cmn-Hans',
				'name'		=> [
					'zh-cn'		=> '简体中文',
					'zh-tw'		=> '簡體中文',
					'en'		=> 'Simplified Chinese',
				],
			],
			'currency'    => [
				'slug'      => 'RMB',
				'name'      => 'Chinese yuan',
				'alias'     => 'CNY',
				'symbol'    => '¥',
				'separator' => ',',
				'point'     => '.',
				'decimals'  => 2,
			],
			'country_code'	=> 86,
			'direction'   => 'ltr',
		],

		'us' => [
			'slug'        => 'america',
			'alias'       => 'us',
			'name'        => [
				'zh-cn' => '美国',
				'zh-tw' => '美國',
				'en'    => 'United States',
			],
			'iso' 		  => 'en',
			'translator' => [
				'slug'    => 'en',
				'browser' => 'en',
				'name'    => [
					'zh-cn' => '英文',
					'zh-tw' => '英文',
					'en'    => 'English'
				],
			],
			'currency'    => [
				'slug'      => 'USD',
				'name'      => 'USD Dollar',
				'alias'     => 'USD',
				'symbol'    => '$',
				'separator' => ',',
				'point'     => '.',
				'decimals'  => 2,
			],
			'country_code'	=> 1,
			'direction'   => 'ltr',
		]

	],
];
