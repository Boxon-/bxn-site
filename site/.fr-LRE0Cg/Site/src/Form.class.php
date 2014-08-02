<?php
class Form extends Component {
	private $name;
	private $inputs;
	private $errorMessages;
	private $template;
	
    public function __construct($name="newForm",$type,$template=NULL,$updateLog=true) {
		parent::__construct("form");
		$this->name=$name;
		$this->template=$template;
		$this->inputs=array();	
	}

	//getters
	
	//generators
	public function generateInputTag($name){
		if(isset($this->inputs[$name])){
			$input = $this->inputs[$name];
			$output=$input->generateTag();
		}
		return $output;
	}
	public function generateFormTag(){
		if($template==NULL){
			$output='<form id="form-'.$this->name.'" name="'.$this->name.'" class="form-'.$this->type.'">'."\n";
			$output.='<div id="message_error"></div></br>'."\n";
			foreach ($this->inputs as $input){
				$output.='	'.$input->generateTag().'</br>'."\n";
			}
			$output.='</form>'."\n";
			return $output;
		}
	}
	
	//inputs 
	public function addInput($name,$type){
		$nInput=new Input($name,$type);
		$this->inputs['name']=$nInput;
	}
	

}
?>
