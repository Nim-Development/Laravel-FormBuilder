<?php

namespace NimDevelopment\FormBuilder\Classes\Helpers;

class SnippetHelper
{
	static function names_loop($classes){
		if(!$classes){
			return null;
		}
		if(is_string($classes)){
			return $classes;
		}
		if(is_array($classes)){
			$classes_string = '';
			foreach($classes as $class){
				$classes_string .= ' '.$class;
			}
			//return string of classes
			return $classes_string;
		}
		return null;
	}

	static function generate_snippet($tags = null, $tag){

		if(count($tags) > 0 ){
			$tagline = '<'.$tag;
			foreach($tags as $key => $value){
				if(is_array($value)){
					$tag=$key.'="';
					foreach($value as $values_value){
						$tag.= $values_value.' ';
					}
					$tagline.=$tag.'"';
				}else{
					$tagline.=' '.$key.'='.'"'.$value.'"';
				}
			}
			return '<'.$tag.$tagline.'>';
		}else{
			return '<'.$tag.'>';
		}
	}
	
}

?>