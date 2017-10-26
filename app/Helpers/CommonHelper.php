<?php

namespace App\Helpers;

class CommonHelper{

	public static function string_limit($string){
		return str_limit($string, 100);
	}
}