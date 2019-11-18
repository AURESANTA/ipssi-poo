<?php
	namespace Ipssi\Evaluation;

	// Classe qui gère l'élément texte
	class Text extends Position
	{
		private $color;
		private $content;

		public function __construct($X, $Y, Color $color, $size, $content)
		{
			parent::__construct($X, $Y);
			$this->color = $color;
			$this->size = $size;
			$this->content = $content;
		}

		public function getSize()
		{
			return "$this->size";
		}

		public function getColor()
		{
			return 'Le RGB est composé de R = '. $this->color->getRed().' G = '. $this->color->getGreen() . ' B = '.$this->color->getBlue();
		}

		public function __toString()
		{
			return 'Texte : ' . $this->getColor() . ' Taille : ' . $this->getSize() . ' Position :  X = ' . $this->getX(). ', Y = '. $this->getY() . ' Contenu : ' . $this->content;
		}
	}