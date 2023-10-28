<?php
//class metier:

class Article{

	private $id;
	private $titre;
	private $paragraphe;
	private $image;
	
	


	public function __construct($id,$titre,$paragraphe,$image){
		$this->id=$id;
		$this->titre=$titre;
		$this->paragraphe=$paragraphe;
		$this->image=$image;
		
		

	}
	public function getId(){
	    return $this->id;
	}
	public function getTitre(){
	    return $this->titre;
	}
	public function setTitre($titre){
	    $this->titre=$titre;
	}
	public function getParagraphe(){
	    return $this->paragraphe;
	}
	public function setParagraphe($paragraphe){
	    $this->paragraphe=$paragraphe;
	}
	public function getImage(){
		return $this->image;
	}
	public function setImage($image){
		$this->image=$image;
	}	

}


?>