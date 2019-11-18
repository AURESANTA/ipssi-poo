<?php

namespace Ipssi\Evaluation;

// Classe permettant de construire le doc à l'aide des éléments passés
class Document
{

	private $name;
	private $color;
	private $content=[];

	public function __construct($name, Color $color)
	{
		$this->name = $name;
		$this->color = $color;
	}

	public function getName()
	{
		return $this->name;
	}

	public function addElement($object)
	{
		$element=array_push($this->content, $object);
	}

	public function getContent()
	{
		foreach ($this->content as $dataContent){
			echo ($dataContent->__toString() .PHP_EOL );
		}
	}

	public function __toString()
	{
		echo 'Le Document nommé ' . $this->getName() .  ' a un background de couleur : '. $this->color->getColor() . PHP_EOL;
	}
}