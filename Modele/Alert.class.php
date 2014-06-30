<?php
class Alert extends Component{
	private $alertType;
	private $content;
	private $timestamp;
	private $id;
	private $style;
	private $classCSS;


    public function __construct($content,$alertType='event',$id=0,$classCSS="standarAlert"){
		parent::__construct("alert");
		$this->timestamp = date("F j, Y, g:i a");  
		$this->alertType = $alertType;  
		$this->content = $content;  
		$this->id = $id;  
		$this->classCSS = $classCSS;  

		
    }
	//GETTER
	public function getContent(){
		return $this->content;
	}
	//SETTER
	public function setContent($c){
		$this->content=$c;
	}
	//affichage de l'alerte
	public function display(){
		$output="";
		switch($this->alertType){
			case 'event':
				$this->style="color:blue;";
			break;
			case 'error':
				$this->style="color:red;";
			break;
			case 'success':
				$this->style="color:green;";
			break;
		}
		$output ='<span class="alertTimestamp">'.$this->timestamp.'</span><span id="'.$this->id.'" class="'.$this->classCSS.'" style="'.$this->style.'" >'.$this->content.'</span>';
		return $output;
		
	}

}
?>
