<?php
class cal{
	public $a,$b,$c;
	function sum()
	{
	$this->c = $this->a + $this->b;
	return$this->c;
	}
	function mul()
	{
	$this->c=$this->a*$this->b;
	return $this->c;


	}

}
$c1=new cal();
$c1->a=1;
$c1->b=1;
echo "sum:",$c1->sum();
echo $c1->mul();
$c2 = new cal();
$c2-> a=20;
$c2-> b=30;
echo $c2->sum();
$c2->mul();
?>