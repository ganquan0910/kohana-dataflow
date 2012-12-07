<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Dataflow Decode PHP Driver
 * 
 * @package		Dataflow
 * @category	Base
 * @author		Micheal Morgan <micheal@morgan.ly>
 * @copyright	(c) 2011-2012 Micheal Morgan
 * @license		MIT
 */
class Kohana_Dataflow_Decode_Php extends Dataflow_Decode
{
	/**
	 * Decode
	 * 
	 * @access	protected
	 * @return	array
	 */
	protected function _decode($data)
	{
		return unserialize($data);
	}
}
