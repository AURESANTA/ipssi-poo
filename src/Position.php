<?php

	namespace Ipssi\Evaluation;

	// Classe qui gère la position sur 2 axes
	abstract class Position
	{
			private $X;
			private $Y;

		public function __construct($X, $Y)
		{
			$this->X = $X;
			$this->Y = $Y;
		}

		public function getX()
		{
			return $this->X;
		}

		public function getY()
		{
			return $this->Y;
		}
	}