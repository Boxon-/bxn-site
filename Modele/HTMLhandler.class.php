<?php
class HTMLhandler {

	//variables 
	private $handler;
	
    public function __construct($url){
		$this->handler = file_get_html($url);
    }
	public function getElementContent($tag,$id){
		foreach($this->handler->find($tag) as $element)
		if($element->id==$id){
			return $element->plaintext;
		}
	}


}
?>
