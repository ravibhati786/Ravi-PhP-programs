<?php
	// Define an interface which has methods area(), volumne(). Define constant PI. Create a class cylinder which implements this interface and calculate area and volume. (Hint: Use define()).
	
	define("PI", "3.14");

	interface Calculate
	{
		public function area();
		public function volume();
	}

	class Cylinder implements Calculate
	{
		public $r; 
		public $h;

		function __construct($rad,$hei)
		{
			$this->r = $rad;
			$this->h = $hei;
		}

		function area()
		{
			$area = 2*PI*$this->r*$this->h+2*PI*$this->r*$this->r;
			echo "Area of Cylinder is = $area<br>";
		}

		function volume()
		{
			$volume = PI*$this->r*$this->r*$this->h;
			echo "Volume of Cylinder is = $volume";
		}
	}

	$cyl = new Cylinder(5,10);
	$cyl->area();
	$cyl->volume();


?>