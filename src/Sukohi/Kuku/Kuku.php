<?php namespace Sukohi\Kuku;

use Illuminate\Support\Facades\HTML;

class Kuku {
	
	const REPLACEMENT = '__KUKU_REPLACEMENT__';
	
	public static function rawLink($url, $title = null, $attributes = array()) {
		
		$link = HTML::link($url, self::REPLACEMENT, $attributes);
		return str_replace(self::REPLACEMENT, $title, $link);
		
	}
	
	public static function rawLinkRoute($name, $title = null, $parameters = array(), $attributes = array()) {
		
		$link = HTML::linkRoute($name, self::REPLACEMENT, $parameters, $attributes);
		return str_replace(self::REPLACEMENT, $title, $link);
		
	}
	
}

/*** Example

	echo Kuku::rawLink('home/test', 'test<br>test');
	echo Kuku::rawLinkRoute('route.name', 'test<br>test');

***/