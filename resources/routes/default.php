<?php

//	@var Ofcold\Routing\Router
$router = ofcold('router');

class DefaultController
{
	public function make()
	{
		$lang = locale_slug(true);
		$config = [
			'_APP_URL'		=> create_subdomain_full(),
			'_APP_API_URL'	=> create_subdomain_full('api', '1.0'),
			'_TIMEZONE'		=> ofcold('config')->get('app.timezone'),
			'_LOCALE'		=> ofcold('locale')->getLocale()->toArray(),
			'_LOCALES'		=> ofcold('locale')->getLocales()->enabledLocales()
		];
		return view('home', compact('config', 'lang') );
	}
}

//	Default routes.
$router->any('{all}', 'DefaultController@make')->where(['all' => '.*']);