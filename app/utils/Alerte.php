<?php

class Alerte {

	public $content = '';
	public $type = 'info';

	function Alerte($type = 'info',$content = ''){
		$this->type = $type;
		$this->content = $content;
	}
	
}