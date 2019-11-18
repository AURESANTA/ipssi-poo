<?php
	namespace Ipssi\Evaluation;

	class Color
	{

		private $red;
		private $green;
		private $blue;

		public function __construct(int $red,int $green,int $blue)
		{
			$this->red = $red;
			$this->green = $green;
			$this->blue = $blue;
		}

		public function getBlue()
		{
			return $this->blue;
		}

		public function getGreen()
		{
			return $this->green;
		}

		public function getRed()
		{
			return $this->red;
		}
		public function getColor()
		{
			return 'R'. $this->red .' G:' . $this->green . ' B:' . $this->blue;
		}
	}