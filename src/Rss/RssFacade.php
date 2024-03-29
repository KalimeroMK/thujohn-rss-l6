<?php namespace Rss;

use Illuminate\Support\Facades\Facade;

class RssFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor(): string
    {
        return 'rss';
    }

}