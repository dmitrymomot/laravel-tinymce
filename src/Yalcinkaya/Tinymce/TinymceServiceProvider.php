<?php namespace Yalcinkaya\Tinymce;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class TinymceServiceProvider extends ServiceProvider {


	public function register() {}

	public function boot()
	{
		$this->package('yalcinkaya/tinymce');

		AliasLoader::getInstance()->alias('Tinymce', 'Yalcinkaya\Tinymce\Tinymce');
	}

}
