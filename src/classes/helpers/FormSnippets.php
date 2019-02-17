<?php

namespace NimDevelopment\FormBuilder\Classes\Helpers;
use NimDevelopment\FormBuilder\Classes\Helpers\SnippetHelper;

class FormSnippets extends SnippetHelper
{
	static function generate_snippet($tags = null, $tag){
		if(is_array($tags)){
			if(count($tags) > 0 ){
				$tagline = '';
				foreach($tags as $key => $value){
					if(is_array($value)){
						$looptag=$key.'="';
						foreach($value as $values_value){
							$looptag.= $values_value.' ';
						}
						$tagline.=$looptag.'"';
					}else{
						$tagline.=' '.$key.'='.'"'.$value.'"';
					}
				}
				return '<'.$tag.$tagline.'>';
			}else{
				return '<'.$tag.'>';
			}
		}elseif(!$tags){
			return '</'.$tag.'>';
		}else{
			echo 'Error: no valid parameters given to '.$tag.'()'; die;
		}
	}
}

?>