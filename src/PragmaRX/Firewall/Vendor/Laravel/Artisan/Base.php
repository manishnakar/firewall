<?php namespace PragmaRX\Firewall\Vendor\Laravel\Artisan;

use Illuminate\Console\Command;

class Base extends Command {

	public function displayMessages($type, $messages)
	{
		foreach($messages as $message)
		{
			$this->$type($message);
		}
	}

}
