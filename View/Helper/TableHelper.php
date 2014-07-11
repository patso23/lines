<?php
/**
 * Table helper.
 *
 * @package app.View.Helper
 */
class TableHelper extends AppHelper
{
/**
 * Helpers used by this helper.
 *
 * @access public
 * @var array
 */
	public $helpers = array('Html');

/**
 * Generates an array of selectable address matches.
 *
 * @access public
 * @param array $headers Array of column headers.
 * @param array $rows Array of table rows.
 * @return string The content to render.
 */
	public function table($headers, $rows, $options = null)
	{
		# table
		return $this->Html->tag('table', implode("\n", array(

			# table headers
			$this->Html->tag('thead', $this->Html->tableHeaders($headers)),

			# table body
			$this->Html->tag('tbody', implode("\n", $rows)),

		)), $options);
	}
}
