<?php

	namespace Ipssi\Evaluation;

	class Star extends Shape
	{
		public function __construct(Color $color, $size, $X, $Y)
		{
			parent::__construct($color, $size, $X, $Y);
		}
		public function __toString()
		{
			return 'Etoile : '. $this->getColor() . '  Taille : '. $this->getSize() . '  Position :  X = ' . $this->getX(). ', Y = '. $this->getY();
		}
	}