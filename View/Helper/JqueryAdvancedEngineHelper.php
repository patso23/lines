<?php

App::uses('JqueryEngineHelper', 'View/Helper');

/**
 * @package app.View.Helper
 */
class JqueryAdvancedEngineHelper extends JqueryEngineHelper
{
/**
 * @access public
 * @return void.
 */
	public function __construct(View $view)
	{
		parent::__construct($view);

		$this->bufferedMethods[] = 'trigger';
		$this->bufferedMethods[] = 'dialog';
		$this->bufferedMethods[] = 'dataTable';
	}

/**
 * @access public
 * @param string $event 
 * @return string
 */
	public function trigger($event)
	{
		return $this->selection . ".trigger('$event');";
	}

/**
 * @access public
 * @param mixed $arg1 
 * @param string $options 
 * @return string
 */
	public function dialog($arg1, $options = null)
	{
		if (is_array($options))
		{
			$this->_mapOptions('dialog', $options);
		}

		$script = $this->selection . '.dialog(';

		$script .= is_array($arg1) ? $this->block($arg1) : "'$arg1'";

		$script .= ');';

		return $script;
	}

/**
 * @access public
 * @return string
 */
	public function dataTable($settings, $options = null)
	{
		if (is_array($options))
		{
			$this->_mapOptions('dataTable', $options);
		}

		return $this->selection . '.dataTable(' . $this->block($settings) . ');';
	}

/**
 * @access public
 * @param string $members 
 * @return string
 */
	private function block($members)
	{
		$block = '{';

		$delimiter = "";

		foreach ($members as $name => $value)
		{
			$block .= $delimiter . $name . ': ';

			if (is_string($value))
			{
				$block .= "'$value'";
			}
			else if (is_bool($value))
			{
				$block .= (true == $value) ? 'true' : 'false';
			}
			else
			{
				$block .= $value;
			}

			$delimiter = ', ';
		}

		$block .= '}';

		return $block;
	}
}
?>
