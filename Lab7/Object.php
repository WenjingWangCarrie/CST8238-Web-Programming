<!DOCTYPE html>
<html>
<head>
<title>Object.php</title>
<link rel="stylesheet" type="text/css" href="styleSheet.css" />
</head>

<body>

<?php include "Header.php"; ?>
<?php include "Menu.php"; ?>

<div class="content">

<?php
class Vehicle {
	
	protected $make;
	protected $model;
	protected $year;
	protected $price;
	
	function __construct($make, $model, $year, $price) {
		$this->make = $make;
		$this->model = $model;
		$this->year = $year;
		$this->price = $price;
	}
	
	public function displayObject() {
		return "Make: " . $this->make . ", Model: " . $this->model . ", Year: " . $this->year . ", Price " . $this->price;
	}
}

class LandVehicle extends Vehicle {
	private $maxSpeed;
	
	function __construct($make, $model, $year, $price, $maxSpeed) {
		parent::__construct ($make, $model, $year, $price);
		$this->maxSpeed = $maxSpeed;
	}
	
	public function displayObject() {
		return parent::displayObject () . ", Speed Limit: " . $this->maxSpeed . "<br/>";
	}
}

echo "<br/>";
echo "<br/>";

$land = new LandVehicle ("Toyota", "Camry", 1992, 2000, 180);
echo $land->displayObject ();
$land = new LandVehicle ("Honda", "Accord", 2002, 6000, 200);
echo $land->displayObject ();
$land = new LandVehicle ("BMW", "Sedan", 2005, 9000, 220);
echo $land->displayObject ();

echo "<br/>";
echo "<br/>";

class WaterVehicle extends Vehicle {
	private $boatCapacity;
	
	function __construct($make, $model, $year, $price, $boatCapacity) {
		parent::__construct ($make, $model, $year, $price);
		$this->boatCapacity = $boatCapacity;
		
	}
	
	public function displayObject() {
		return parent::displayObject () . ", Boat Capacity: " . $this->boatCapacity . "<br/>";
	}
}

$water = new WaterVehicle ("Mitsubishi", "Turbo", 1999, 20000, 18);
echo $water->displayObject ();
$water = new WaterVehicle ("Hyundai", "XT", 2012, 26000, 8);
echo $water->displayObject ();
$water = new WaterVehicle ("Canoe", "XT", 2014, 22000, 6);
echo $water->displayObject ();

?>

</div>

<?php include "Footer.php"; ?>

</body>

</html>








