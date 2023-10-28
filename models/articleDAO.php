<?php
class ArticlesDAO
{
	//GetById
	public function ListeArticles()
	{
		$query = Database::connect()->prepare("SELECT * FROM articles ");
		$query->execute();
		$Articles = $query->fetchAll();
		return $Articles;

	}

	public function ListeArticlesDetail()
	{
		$query = Database::connect()->prepare("SELECT id, titre, SUBSTRING(paragraphe, 1, 250) AS paragraphe_abrege,`image` FROM articles");
		$query->execute();
		$Articles = $query->fetchAll();
		return $Articles;

	}

	public function ShowArtcile($id)
	{
		$query = Database::connect()->prepare("SELECT * FROM articles where id=?");
		$query->execute([$id]);
		$Produits = $query->fetch();
		return $Produits;

	}

	public function add(Article $Articles)
	{
		$query = Database::connect()->prepare("INSERT INTO articles (titre,paragraphe,`image`) VALUES(?,?,?)");
		$query->execute([$Articles->getTitre(), $Articles->getParagraphe(), $Articles->getImage()]);

	}

	public function Delete($id)
	{
		$query = Database::connect()->prepare("DELETE FROM articles where id=?");
		$query->execute([$id]);

	}

}