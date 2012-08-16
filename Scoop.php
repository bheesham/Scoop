<?php
/**
 * 	A class to handle getting inputs.
 *
 * 	@author 		Bheesham Persaud <http://bheesham.com/>
 * 	@copyright 	Copyright (C) 2012 Bheesham Persaud.
 * 	@license 		Beerware <http://wikipedia.org/wiki/Beerware>
 */
class Scoop {
	private $__variables = array(
		'get' 	=> array(),
		'post' 	=> array(),
		'session' => array(),
		'cookie' 	=> array()
	);

	/**
	 *
	 * 	When constructed, the class will save all of the variables from:
	 * 		*  $_POST
	 *		*  $_GET
	 * 		*  $_SESSION
	 *		*  $_COOKIE
	 *
	 */

	function __construct() {
		if (isset($_GET) && !empty($_GET)) {
			$this->__variables['get'] = array_filter($_GET);
		}
		if (isset($_POST) && !empty($_POST)) {
			$this->__variables['post'] = array_filter($_POST);
		}
		if (isset($_SESSION) && !empty($_SESSION)) {
			$this->__variables['session'] = array_filter($_SESSION);
		}
		if (isset($_COOKIE) && !empty($_COOKIE)) {
			$this->__variables['cookie'] = array_filter($_COOKIE);
		}
	}

	/**
	 *
	 *	A wrapper for __get_v(). Will return a single $_GET varible, or all.
	 *
	 * 	@param 	string	
	 *
	 * 	@return mixed
	 */
	function get($key = '') {
		return $this->__get_v('get', $key);
	}

	/**
	 *
	 *	Does the same thing as get(), but for the $_POST variables.
	 *
	 * 	@see 	get()
	 *
	 * 	@param 	string	
	 *
	 * 	@return 	mixed
	 */
	function post($key = '') {
		return $this->__get_v('post', $key);
	}

	/**
	 *
	 *	Does the same thing as get(), but for the $_SESSION variables.
	 *
	 * 	@see 	get()
	 *
	 * 	@param 	string	
	 *
	 * 	@return 	mixed
	 */
	function session($key = '') {
		return $this->__get_v('session', $key);
	}

	/**
	 *
	 *	Does the same thing as get(), but for the $_COOKIE variables.
	 *
	 * 	@see 	get()
	 *
	 * 	@param 	string	
	 *
	 * 	@return 	mixed
	 */
	function cookie($key = '') {
		return $this->__get_v('cookie', $key);
	}

	/**
	 *
	 *	Will return all of the set $_GET, $_POST, $_SESSION and $_COOKIE
	 * 	variables.
	 *
	 * 	@return 	mixed
	 */
	function all() {
		return $this->__variables;
	}

	/**
	 *
	 *	Accesses a $__variable, and checks to see if a key is set. If it is,
	 * 	then we return that, or just false if doesn't.
	 *
	 * 	@param 	string	
	 * 	@param 	string
	 *
	 * 	@return 	mixed
	 */
	private function __get_v($where, $key) {
		if (isset($this->__variables[$where][$key])) {
			return $this->__variables[$where][$key];
		} else {
			return false;
		}
	}
}