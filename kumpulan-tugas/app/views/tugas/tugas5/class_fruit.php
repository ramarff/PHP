<?php 
class Fruit{
	public $name;
	public $color;

	public function __construct($name, $color){
		$this->name=$name;
		$this->color=$color;
	}

	public function intro(){
		echo "Buah ini bernama 	".$this->name." dan buah ini berwarna ".$this->color;
	}
}


class Strawberry extends Fruit
{	

	function __construct($name, $color){
		parent::__construct($name, $color);
			$this->name=$name;
			$this->color=$color;
	}
	public function pesan(){
		echo "Apakah saya buah atau Strawberry?";
	}
}

$strawberry=new Strawberry("strawberry","merah");
$strawberry->pesan();
echo"<br>";
$strawberry->intro();
 ?>