<?php

namespace Tartan\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * Class Tarikh
 * @package Tartan\Facades
 * @author Tartan <iamtartan@gmail.com>
 */
class Tarikh extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'Tartan\Helpers\PersianDateHelper';
	}
}