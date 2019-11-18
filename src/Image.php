<?php
	namespace Ipssi\Evaluation;

	// Classe qui gère l'élément image
	class Image extends Position
	{

		private $name;
		private $height;
		private $width;

		public function __construct($name, $height, $width, $X, $Y)
		{
			parent::__construct($X, $Y);
			$this->name = $name;
			$this->height = $height;
			$this->width = $width;
		}
		public function getName()
		{
			return $this->name;
		}
		public function getHeight()
		{
			return $this->height;
		}
		public function getWidth()
		{
			return $this->width;
		}
		public function __toString()
		{
			return 'Nom de l\'image : ' . $this->getName() . '  Largeur : ' . $this->getWidth().' Hauteur ' . $this->getHeight();
		}
	}