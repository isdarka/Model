<?php 

namespace Model\Interfaces;

interface BeanInterface
{

	/**
	 * Convert to array
	 * @return array
	*/
	public function toArrayFor($fields);


}