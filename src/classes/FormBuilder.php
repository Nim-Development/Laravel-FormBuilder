<?php

namespace NimDevelopment\FormBuilder\Classes;

use NimDevelopment\FormBuilder\Classes\Helpers\FormSnippets;

class FormBuilder
{

	private $open_tag_track = '';

	private $form_tag = '';
	private $html = '';


	public function div($tags=null){

		$this->html.= FormSnippets::generate_snippet($tags, 'div');
		$this->open_tag_track = 'div';

		return $this;
	}

	public function input($tags=null){

		$this->html.= FormSnippets::generate_snippet($tags, 'input');
		$this->open_tag_track = 'input';

		return $this;
	}

	public function button($tags=null){

		$this->html.= FormSnippets::generate_snippet($tags, 'button');
		$this->open_tag_track = 'button';

		return $this;
	}


	//select
	public function select($tags=null){

		$this->html.= FormSnippets::generate_snippet($tags, 'select');
		$this->open_tag_track = 'select';

		return $this;
	}

	public function option($tags=null){

		$this->html.= FormSnippets::generate_snippet($tags, 'option');
		$this->open_tag_track = 'option';

		return $this;
	}

	public function textarea($tags=null){

		$this->html.= FormSnippets::generate_snippet($tags, 'textarea');
		$this->open_tag_track = 'textarea';

		return $this;
	}

	public function text($txt){
		$this->html.=$txt;
		return $this;
	}

	public function close(){

		$this->html.='</'.$this->open_tag_track.'>';

		//handling open selector (which closes after all options are closed)
		if($this->open_tag_track == 'option'){
			$this->open_tag_track = 'select';
		}

		return $this;
	}



	// Forms
	public function open_form($args=null){
		if(is_array($args)){
			$this->form_tag.= FormSnippets::generate_snippet($args, 'form');
		}else{echo 'Error: no valid parameters given to form()'; die;}

		$this->open_tag_track = 'form';
		return $this;
	}

	public function close_form(){
		$this->html.= '</form>';
		return $this;
	}
	//



	//Functions called in blade snippet
	public function insert_form(){
		return $this->form_tag;
	}

	public function desert_form(){
		return $this->html;
	}
	//End Functions called in blade snippet


	//quick form group tags
	public function formGroup($state=null){
		if($state == 'open'){
			$this->html.= '<div class="form-group">';
		}elseif($state == 'close' || $state == null){
			$this->html.= '</div>';
		}

		return $this;
	}
	//


	public function test(){
		return $this->html;
	}
}

?>