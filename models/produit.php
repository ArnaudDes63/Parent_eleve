<?php
//class metier:

class Produit{

	private $id;
	private $titre;
	private $prix;
	private $stock;
	private $id_Categorie;
	private $image;


	public function __construct($id,$titre,$prix,$stock,$id_Categorie,$image){
		$this->id=$id;
		$this->titre=$titre;
		$this->prix=$prix;
		$this->stock=$stock;
		$this->id_Categorie=$id_Categorie;
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
	public function getPrix(){
	    return $this->prix;
	}
	public function setPrix($prix){
	    $this->prix=$prix;
	}
	public function getStock(){
		return $this->stock;
	}
	public function setStock($stock){
		$this->stock=$stock;
	}
	public function getId_Categorie(){
		return $this->id_Categorie;
	}
	public function setId_Categorie($id_Categorie){
		$this->id_Categorie=$id_Categorie;
	}
	public function getImage(){
	    return $this->image;
	}
	public function setImage($image){
	    $this->image=$image;
	}

}


?>