<?php 

namespace NimDevelopment\FormBuilder\Facades;

use Illuminate\Support\Facades\Facade;

class FormBuilder extends Facade
{
	protected static function getFacadeAccessor()
	{
		//Name we assigned to class when we binded it into the service container
		return 'form-builder';
	}
}

?>