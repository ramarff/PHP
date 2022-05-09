<?php 
class Fruit{
	public $name;
	protected $color;
	private $weight;


	public function set_name($name){
		$this->name=$name;
	}
	protected function set_color($color){
		$this->color=$color;
	}
	private function set_weight($weight){
		$this->weight=$weight;
	}
}

$mango=new Fruit();
// $mango->name="Mango";
// $mango->color="Green";
// $mango->weight=800;
$mango->set_name("Mango");
// $mango->set_color("Green");
// $mango->set_weight(800);
echo $mango->name;



 ?>