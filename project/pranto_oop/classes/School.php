<?php

/**
 * 
 */
class School{
	public $name;
	
		public function describe(){
			echo "ok <br>";
		}
		public function __get($pm){
			echo "$pm is a good boy.<br>";
		}
		public function __set($pm,$value){
			echo "we set $pm->$value.<br>";
		}
}