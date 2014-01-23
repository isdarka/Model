<?php
/**
 *
 * @author isdarka
 * @created Nov 24, 2013 7:45:31 PM
 */
namespace Model\Factory;

use Model\Interfaces\FactoryInterface;

abstract class AbstractFactory implements FactoryInterface
{
	private static $instances = array();
	
	final public function getUnderscore($string)
	{
		return strtolower(preg_replace('/(?<=[a-z])([A-Z])/', '_$1', $string));
	}
	
	final public static function getInstance(){
		$class = get_called_class();
		if( !isset(self::$instances[$class]) ){
			self::$instances[$class] = new static();
		}
		return self::$instances[$class];
	}
}