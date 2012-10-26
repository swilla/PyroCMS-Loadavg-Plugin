<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Plugin_Loadavg extends Plugin {
	/**
	 * Returns Load Average
	 *
	 * usage:
	 * {{ loadavg:display }}
	 */
	function display()
	{
		$loads = sys_getloadavg();

		return 'Load Average: '. implode(' ',$loads);
	}

}