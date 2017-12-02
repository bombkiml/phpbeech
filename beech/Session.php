<?php
class Session {

	static function init(){
		@session_start();
	}
	
	static function set($key, $val){
		$_SESSION[$key] = $val;
	}
	
	static function get($key){
		if(isset($_SESSION[$key])){
			return $_SESSION[$key];
		}
	}
	
	static function destroy(){
		return session_destroy();
	}
}