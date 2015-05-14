<?php
/**
 * all info classess most have theme namespace .
 * first of all define this namespace
 * name of this class and name of theme folder most be matched.
 */
namespace theme;
use core\data as data;
	class sampleTheme{
		/*
		 * return theme places for insert widgets.this static method most return all places names expect content position
		 * @return array;
		 */
		public static function getPlaces(){
			return ['sidebar1'];
		}
		
		/*
		 * return theme info like author and ...
		 * @return object of \core\data\obj
		 */
		public static function getInfo(){
			$info = new data\obj;
			$info->name = _('Sample theme');
			$info->author = _('Babak Alizadeh');
			return $info;
		}
	}
?>
