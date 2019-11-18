<?php

	namespace Ipssi\Evaluation;

	// Classe abstraite mère de Nuage et Etoile
	abstract class Shape extends Position
	{
		private $color;
		private $size;
	
		public function __construct(Color $color, $size, $X, $Y)
		{
			parent::__construct($X, $Y);

			$this->color = $color;
			$this->size = $size;
		}

		public function getSize()
		{
			return $this->size;
		}

		public function getColor()
		{
			return 'Le RGB est composé de R = '. $this->color->getRed().' G = '. $this->color->getGreen() . ' B = '.$this->color->getBlue();
		}
	}