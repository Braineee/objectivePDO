<?php
/*
 * USESD FOR HANDELING GLOBALS CONFIGURATION
 * Author: DAVID DANIEL
 * Last Edited: 26/04/2017
 * STILL "To Do if any"
*/
class Config {
	/*
	 * This function extracts data from the config file and refer it to the PDO database Object
	 * Parameter = $path(array)
	 * return type = string 
	*/

	public static function get($path = null){
		if($path){
			$config = $GLOBALS["config"];
			$path = explode('/', $path);     // breake the path string into an array;

			// loop over the array
			foreach ($path as $bit){
				if (isset($config[$bit])){   // if the array bit is valid set the $config = key value of array
					$config = $config[$bit];
				}
			}
			return $config;
		}

		// return false if the path does not exists;
		return false;
	}
}