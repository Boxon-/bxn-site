<?php
class Input extends Component {
	private $name;
	private $inputType;
	private $label;
	private $open;
	private $feedback;
	private $mandatory;
	private $maxChar;
	private $minChar;
	
    public function __construct( $open=true, $name="newInput", $inputType="text",$label=NULL,$updateLog=true) {
		parent::__construct("input");
		$this->name=$name;
		$this->inputType=$inputType;
		$this->open = $open;
		$this->mandatory=true;
		$this->maxChar=100;
		$this->minChar=0;
		if($label==NULL){
			$this->label=$this->name;
		}else{
			$this->label=$label;
		}
		if($updateLog){
			$this->Log("new input :'".$this->name."' of type :".$this->inputType,"event");
		}
	}

	//getters
	public function getName(){
		return $this->name;
	}
	public function getInputType(){
		return $this->inputType;
	}
	public function getLabel(){
		return $this->label;
	}	
	public function getMaxChar(){
		return $this->maxChar;
	}
	public function getMinChar(){
		return $this->minChar;
	}
	public function isOpen(){
		return $this->open;
	}
	public function isMandatory(){
		return $this->mandatory;
	}
	
	//setter
	public function setFeedback(string $text){
		$this->feedback=$text;
	}	
	public function setMandatory(bool $bool){
		$this->mandatory=$bool;
	}
	public function setMaxChar(int $int){
		$this->maxChar=$int;
	}
	public function setMinChar(int $int){
		$this->minChar=$int;
	}
		
	//generator
	public function generateTag(){
		$Attributes="";
		switch($this->inputType){
			case "int":
				$Attributes='type="number"';
			break;	
			case "title":
				$Attributes='type="text" size=20';
			break;
			case "article":
				$Attributes='type="text" size=200';
			break;
			case "mp":
				$Attributes='type="password" size=20';
			break;
			case "pseudo":
				$Attributes='type="text" size=20';
			break;
			case "mail":
				$Attributes='type="mail" size=20';
			break;
			case "checkbox":
				$Attributes='type="checkbox" size=100';
			break;
			case "submit":
				$Attributes='type="submit"';
			break;
			case "hidden":
				$Attributes='type="submit"';
			break;
			return $output;
		}
		$l='<label for="input-'.$this->name.'">'.$this->label.'</label>';
		$i='<input '.$Attributes.'id="input-'.$this->name.'" name="'.$this->name.'" class="input-'.$this->inputType.'">';
		$output=$l.$i;
		return $output;
	}
	

}
?>
