<?php
// Create class rectangle and derive a class square from class Rectangle. Create anther class circle. Create an interface with only one method called area(). Implement this interface in all the classes. 
// Write a program to accept details of a square, circle and rectangle and display the area.

	interface Area
	{
		function area();
	}

	class Rectangle
	{
		var $width;
		var $length;

		function __construct($w,$l)
		{
			$this->width = $w;
			$this->length = $l;
		}

		function area()
		{
			echo "Area of Rectangle = ".$this->width*$this->length;
			echo "<br>";
		}

	} 

	class Square extends Rectangle
	{
		var $side;

		function __construct($s)
		{
			$this->side = $s;
		}

		function area()
		{
			echo "Area of Square = ".$this->side*$this->side;
			echo "<br>";
		}

	}

	class Circle
	{
		var $radius;
		function __construct($r)
		{
			$this->radius = $r;
		}

		function area()
		{
			echo "Area of Circle = ".(3.14*$this->radius*$this->radius);
			echo "<br>";
		}
	}


	$rec = new Rectangle(10,15);
	$rec->area();

	$squ = new Square(5);
	$squ->area();

	$cir = new Circle(7);
	$cir->area();

?>