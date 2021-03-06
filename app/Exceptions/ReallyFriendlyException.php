<?php

namespace App\Exceptions;

class ReallyFriendlyException extends \Exception
{
	public $redirect_url;
	function __construct($message, $code, $redirect_url = '')
	{
		parent::__construct($message, $code);
		$this->redirect_url = $redirect_url;
	}

}