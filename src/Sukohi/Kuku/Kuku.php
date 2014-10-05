<?php namespace Sukohi\Kuku;

use Illuminate\Support\Facades\HTML;
use Illuminate\Support\Facades\Form;

class Kuku {
	
	const REPLACEMENT = '__KUKU_REPLACEMENT__';
	
	public function link($url, $title = null, $attributes = array()) {
		
		$tag = HTML::link($url, self::REPLACEMENT, $attributes);
		return $this->replace($title, $tag);
		
	}
	
	public function linkRoute($name, $title = null, $parameters = array(), $attributes = array()) {
		
		$tag = HTML::linkRoute($name, self::REPLACEMENT, $parameters, $attributes);
		return $this->replace($title, $tag);
		
	}
	
	public function label($name, $value = null, $options = array()) {
		
		$tag = Form::label($name, self::REPLACEMENT, $options);
		return $this->replace($value, $tag);
		
	}
	
	private function replace($title, $tag) {
		
		return str_replace(self::REPLACEMENT, $title, $tag);
		
	}
	
}

/*** Example

	echo Kuku::rawLink('home/test', 'test<br>test');
	echo Kuku::rawLinkRoute('route.name', 'test<br>test');

***/