<?php
use Ofcold\Configure\Contracts\RepositoryInterface;
return [
	'env'	   => env('APP_ENV', 'local'),
	'debug'	 => env('APP_DEBUG', true),
	'name'	=> env('APP_NAME', 'Ofcold'),
	'slogan'	=> env('APP_SLOGAN', 'ACCOMPANY YOU THROUGH EVERY IMPORTANT MOMENT IN LIFE!'),
	'description'	=> 'ACCOMPANY YOU THROUGH EVERY IMPORTANT MOMENT IN LIFE!',
	'version'   => '1.0.0 beta',
	'force_ssl' => env('FORCE_SSL', false),
	'per_page'  => env('RESULTS_PER_PAGE', 15),
	'url'		=> env('APP_URL', 'http://ofcold.com'),
	'router_entity'	=> [
		'api'		=> env('ENTITY_SUB_DOMAIN_API', 'api'),
		'admin'		=> env('ENTITY_SUB_DOMAIN_ADMIN', 'ft')
	],
	'timezone'  => env('APP_TIMEZONE', 'Asia/Shanghai'),
	'date_format' => env('DATE_FORMAT', 'Y-m-d'),
	'time_format' => env('TIME_FORMAT', 'g:i A'),
	'default_timezone'  => env('DEFAULT_TIMEZONE', 'Asia/Shanghai'),
	'key'	   => env('APP_KEY'),
	'cipher'	=> 'AES-256-CBC',
	'hashing'	=> [
		'driver' => 'argon'
	],
	'log'		=> env('APP_LOG', 'daily'),

	'log_level' => env('APP_LOG_LEVEL', 'debug'),
	'api'		=> [
		'scopes' => [
			'place-orders' => 'Place orders',
			'check-status' => 'Check order status',
		],
	],
	'addons_type'	=> [
		'field_type',
		'extension',
		'module',
		'plugin',
		'theme',
	],
	'cors'	=> [
		'supportsCredentials'	=> 'true',
		'allowedOrigins'		=> [env('APP_URL', 'http://ofcold.com')],
		'allowedOriginsPatterns'=> [],
		'allowedHeaders'		=> ['*'],
		'allowedMethods'		=> ['*'],
		'exposedHeaders'		=> [
			'DNT',
			'X-CustomHeader',
			'Keep-Alive',
			'User-Agent',
			'X-Requested-With',
			'If-Modified-Since',
			'Cache-Control',
			'Content-Type',
			'X-XSRF-TOKEN',
			'X-CSRF-TOKEN',
			'Origin'
		],
		'maxAge'	=> 86400,
	],
	'paths' => [
		//'example' => 'some/local/path',
		//'s3'	  => 'https://region.amazonaws.com/bucket'
	],
	'hints' => [
		'css' => [
			'less',
			'scss',
			'sass',
			'styl'
		],
		'js'  => [
			'coffee'
		]
	],

	/**
	 *	Filters
	 */
	'filters' => [
		//	This is a flag.
		'min'		=> null,
		//	This is a flag.
		'glob'		=> null,
		//	This is a flag.
		'parse'		=> null,
		'less'		=> env('LESS_COMPILER', 'php')
						//	BC compatibility
						? \Ofcold\Asset\Filter\LessFilter::class
						: \Ofcold\Asset\Filter\NodeLessFilter::class,
		'sass'		=> env('SASS_COMPILER', 'php')
						//	BC compatibility
						? \Ofcold\Asset\Filter\SassFilter::class
						: \Ofcold\Asset\Filter\RubySassFilter::class,
		'scss'	   => env('SCSS_COMPILER', env('SASS_COMPILER', 'php'))
					//	BC compatibility
					? \Ofcold\Asset\Filter\ScssFilter::class
					: \Ofcold\Asset\Filter\RubyScssFilter::class,
		'styl'	   => \Ofcold\Asset\Filter\StylusFilter::class,
		'coffee'	 => \Ofcold\Asset\Filter\CoffeeFilter::class,
		'autoprefix' => \Ofcold\Asset\Filter\AutoprefixerFilter::class,
		'separate'   => \Assetic\Filter\SeparatorFilter::class,
		'embed'	  => \Assetic\Filter\PhpCssEmbedFilter::class,
	],
	'live' => env('LIVE_ASSETS', true),
	'version' => env('VERSION_ASSETS', true),
	'autoprefixer' => env('AUTOPREFIXER', OFCOLD . 'bin'),
	'default' => env('CACHE_DRIVER', 'redis'),
	'enabled'		=> env('CACHE_ENABLED', env('APP_DEBUG', false) == false),
	'stores' => [

		'apc' => [
			'driver' => 'apc',
		],

		'array' => [
			'driver' => 'array',
		],

		'file' => [
			'driver'		=> 'file',
			'path'		  => app_path('cache', null, 'storages')
		],

		'redis' => [
			'driver'		=> 'redis',
			'connection'	=> 'cache',
		],

	],
	'prefix' => 'ofcold',
	'defaults'  => [
		'guard'	 => 'user',
		'passwords' => 'users',
	],
	'guards'	=> [
		'user'   => [
			'driver'   => 'session',
			'provider' => 'users',
		],

		'api'	=> [
			'driver'   => 'passport',
			'provider' => 'users',
		],
	],
	'providers' => [
		'users' => [
			'driver' => 'popple',
			'model'  => Ofcold\Module\Users\User\UserModel::class
		],

	],
	'passwords' => [
		'users' => [
			'provider' => 'users',
			'table'	=> 'password_resets',
			'expire'   => 60,
		],
	],
	'default' => 'local',
	'cloud'   => 's3',
	'disks'   => [

		'local'  => [
			'driver'	=> 'local',
			'root'		=> OFCOLD . 'storages'
		],

		'public' => [
			'driver'		=> 'local',
			'root'			=> OFCOLD . 'public/storages',
			'url'			=> env('APP_URL') . '/storage',
			'visibility'	=> 'public'
		],

		's3'     => [
			'driver' => 's3',
			'key'    => env('AWS_KEY'),
			'secret' => env('AWS_SECRET'),
			'region' => env('AWS_REGION'),
			'bucket' => env('AWS_BUCKET')
		]

	],
	'quality'   => env('IMAGE_QUALITY', 80),
	'paths'     => [],
	'macros'    => [
		'mobile_optimized' => [
			'resize'  => [640],
			'quality' => 60,
		],
		'tablet_optimized' => [
			'resize'  => [900],
			'quality' => 75,
		],
	],
	'auto_alt'  => env('IMAGE_ALTS', true),
	'version'   => env('VERSION_IMAGES', true),
	'interlace' => env('IMAGE_INTERLACE', true),
	'default'    => env('QUEUE_DRIVER', 'redis'),

    'connections' => [

        'sync'     => [
            'driver' => 'sync',
        ],

        'database'   => [
            'driver'      => 'database',
            'table'    => 'core_jobs',
            'queue'    => 'default',
            'retry_after' => 90,
        ],

        'beanstalkd' => [
            'driver'      => 'beanstalkd',
            'host'    => 'localhost',
            'queue'    => 'default',
            'retry_after' => 90,
        ],

        'sqs'      => [
            'driver' => 'sqs',
            'key'   => 'your-public-key',
            'secret' => 'your-secret-key',
            'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
            'queue'  => 'your-queue-name',
            'region' => 'us-east-1',
        ],

        'redis'   => [
            'driver'      => 'redis',
            'connection'  => 'queue',
            'queue'    => 'default',
            'retry_after' => 90,
        ],

    ],
    'failed'    => [
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'core_failed_jobs',
    ],
    'driver' => env('SCOUT_DRIVER', 'tntsearch'),
	'prefix' => env('SCOUT_PREFIX', 'futing__'),
	'queue' => true,
	'algolia' => [
		'id'	 => env('ALGOLIA_APP_ID'),
		'secret' => env('ALGOLIA_SECRET'),
	],
	'tntsearch' => [

		//	place where the index files will be stored
		'storage'  => OFCOLD . 'storages/cores/search',
		'fuzziness' => env('TNTSEARCH_FUZZINESS', true),
		'fuzzy' => [
			'prefix_length'		=> 2,
			'max_expansions'	=> 50,
			'distance'			=> 2
		],
		'asYouType'		=> true,
		'searchBoolean'	=> env('TNTSEARCH_BOOLEAN', false),
		'tokenizer' => [
			'driver' => env('TNTSEARCH_TOKENIZER', 'default'),

			'jieba' => [
				'dict' => 'small',
			],
		],
	],
	'general'	=> [
		'tabs'		=> [
			'details'	  => [
				'context' => 'info',
				'title'   => 'label.details',
				'fields'  => [
					'name',
					'description'
				],
			],
			'display'	  => [
				'context' => 'info',
				'title'   => 'label.display',
				'fields'  => [
					'per_page'
				],
			],

			'formats'	  => [
				'context' => 'danger',
				'title'   => 'label.formats',
				'fields'  => [
					'timezone',
					'date_format',
					'time_format'
				],
			],

			'maintenance'  => [
				'context' => 'danger',
				'title'   => 'label.maintenance',
				'fields'  => [
					'debug',
					//'ip_whitelist',
				],
			],
		]
	],
	'driver' => env('SESSION_DRIVER', 'redis'),
	'lifetime' => 120,
	'expire_on_close' => true,
	'encrypt' => false,
	'files' => OFCOLD . 'storages/sessions',
	'connection' => 'session',
	'table' => 'sessions',
	'store' => 'redis',
	'lottery' => [2, 100],
	'cookie' => 'futing_session_storages',
	'path' => '/',
	'domain' => env('SESSION_DOMAIN', '.ofcold.com'),
	'secure' => env('SESSION_SECURE_COOKIE', false),
	'http_only' => true,
	'name'	=> [
		'env'		=> 'APP_NAME',
		'bind'		=> 'app.name',
		'type'		=> 'ofcold.field_type.text',
		'config'	=> [
			'max'		=> 150,
			'default_value' => function (RepositoryInterface $config) {
				return $config->get('app.name');
			}
		]
	],

	'slogan'	=> [
		'env'		=> 'APP_NAME',
		'bind'		=> 'app.slogan',
		'type'		=> 'ofcold.field_type.text',
		'config'	=> [
			'max'		=> 150,
			'default_value' => function (RepositoryInterface $config) {
				return $config->get('app.slogan');
			}
		]
	],

	'description'	 => [
		'type'   => 'ofcold.field_type.text',
		'bind'   => 'app.description',
		'config' => [
			'default_value' => function (RepositoryInterface $config) {
				return $config->get('app.description');
			}
		]
	],

	'timezone'		=> [
		'env'	=> 'APP_TIMEZONE',
		'bind'   => 'app.timezone',
		'type'   => 'ofcold.field_type.select',
		'config' => [
			'mode'			=> 'search',
			'handler'		=> 'timezones',
			'default_value'	=> config('app.timezone')
		]
	],

	'date_format'	 => [
		'env'		 => 'DATE_FORMAT',
		'bind'		=> 'app.date_format',
		'type'		=> 'ofcold.field_type.select',
		'placeholder' => false,
		'required'	=> true,
		'config'	  => [
			'default_value'	=> 'Y-m-d',
			'options' => [
				'j F, Y' => date('j F, Y'), // 06 November, 1996,
				'j M, y' => date('j M, y'), // 06 nov, 96,
				'm/d/Y'  => date('m/d/Y'), // 11/06/1996,
				'd/m/Y'  => date('d/m/Y'), // 06/11/1996,
				'Y-m-d'  => date('Y-m-d') // 1996-11-06,
			]
		],
	],
	'time_format'	 => [
		'env'		 => 'TIME_FORMAT',
		'bind'		=> 'app.time_format',
		'type'		=> 'ofcold.field_type.select',
		'placeholder' => false,
		'required'	=> true,
		'config'	  => [
			'default_value'	=> 'H:i',
			'options' => [
				'g:i A' => date('g:i A'), // 4:00 PM,
				'g:i a' => date('g:i a'), // 4:00 pm,
				'H:i'   => date('H:i') // 16:00,
			]
		],
	],
	'per_page'		=> [
		'env'	  => 'RESULTS_PER_PAGE',
		'bind'	 => 'app.per_page',
		'type'	 => 'ofcold.field_type.select',
		'required' => true,
		'config'   => [
			'default_value' => 15,
			'options'	   => [
				5   => 5,
				10  => 10,
				15  => 15,
				25  => 25,
				50  => 50,
				75  => 75,
				100 => 100,
				150 => 150,
			]
		]
	],

	'debug'		   => [
		'env'	=> 'APP_DEBUG',
		'bind'   => 'app.debug',
		'type'   => 'ofcold.field_type.booleans',
		'config' => [
			'default_value' => function (RepositoryInterface $config) {
				return $config->get('app.debug');
			}
		]
	],
	'default_handler'		=> 'qcloud',

	'supported'		=> [
		'qcloud'		=> [
			'app_key'			=> '',
			'app_id'			=> '1400030784',
		],

		'yunpian'	=> [
			'app_key'
		]
	],
	'twig'		=> [
		'extension'	=> 'twig',
		'environment' => [
			'debug'               => env('APP_DEBUG', false),
			'charset'             => 'utf-8',
			'base_template_class' => Ofcold\View\Twig\Template::class,
			'cache'               => app_path('views.twig', null, 'storages'),
			'auto_reload'         => true,
			'strict_variables'    => false,
			'autoescape'          => 'html',
			'optimizations'       => -1,
		],
		'globals'     => [],
	],

	'extensions' => [
		'enabled'   => [
		],
		'facades'   => [],
		'functions' => [
			'ofcold',
			'elixir',
			'head',
			'last',
			'mix',
			'locale_slug',
			'locale_name',
			'fallback_locale_slug'
		],
		'filters'   => [
			'get' => 'data_get',
		],
	],
	'paths'    => [
		OFCOLD . 'resources/views'
	],
	'compiled' => OFCOLD . 'storages/views',
	'themes'   => [
		'admin'    => env('ADMIN_THEME', 'ofcold.theme.admin')
	],
];