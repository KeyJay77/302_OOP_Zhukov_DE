<?php
	class Fraction
	{
		private $numberator;
		private $denominator;

		public function __construct($numberator, $denominator)
		{
			
			try
			{
				$this->numberator = (int)($numberator);
				$this->denominator = (int)($denominator);
				if(!is_numeric($numberator) or (!is_numeric($denominator)))
				{
					throw new Exception("Введённые значения должны быть числами", 1);	
				}
				if($denominator == 0)
				{
					throw new Exception("Знаменатель не равен 0", 1);
				}
				if($numberator == 0)
				{
					$this -> numberator = 0;
					$this ->denominator = 1;					
				}

			}
			catch (Exception $e){
				echo $e->getMessage();
				die();
			}

			function gcd($n, $m) {
				while(true) {
					if($n == $m) {
						return $m;
					}
					if($n > $m) {
						$n -= $m;
					} else {
						$m -= $n;
					}
				}
			}
			$n =  $this ->numberator < 0 ? -$this -> numberator : $this -> numberator;
			$m =  $this ->denominator < 0 ? -$this -> denominator : $this -> denominator;
			$gcd = gcd($n, $m);
			$this -> numberator/=$gcd;
 			$this -> denominator/=$gcd;

		}

		public function getNumberator()
		{
			return $this->numberator;
		}

		public function getDenominator()
		{
			return $this->denominator;
		}

		public function add($frac)
		{	
			$numberator = $this -> numberator * $frac -> getDenominator() + $this -> denominator * $frac -> getNumberator();
			$denominator = $this -> denominator * $frac -> getDenominator();
			return new Fraction($numberator, $denominator);
		}

		public function sub($frac)
		{	
			$numberator = $this -> numberator * $frac -> getDenominator() - $this -> denominator * $frac -> getNumberator();
			$denominator = $this -> denominator * $frac -> getDenominator();

			return new Fraction($numberator, $denominator);
		}		

		public function multi($frac)
		{	
			$numberator = $this -> numberator *  $frac -> getNumberator();
			$denominator = $this -> denominator * $frac -> getDenominator();
			return new Fraction($numberator, $denominator);
		}

		public function div($frac)
		{	
			$numberator = $this -> numberator *  $frac -> getDenominator();
			$denominator = $this -> denominator * $frac -> getNumberator();
			return new Fraction($numberator, $denominator);
		}

		public function exp($expon)
		{	
			$numberator = pow($this -> numberator,$expon) ;
			$denominator = pow($this -> denominator,$expon);
			return new Fraction($numberator, $denominator);
		}

		//public function fracreduce()
		//{
		//	$n = $this ->numberator;
		//	$m = $this ->denominator;
			
			
		//}

		public function outputnum()
		{
			echo "Числитель: " .$this->numberator. ", Знаменатель: ".$this->denominator."<br>";
		}

		public function __toString()
		{	
			$numberator = $this -> numberator;
			$denominator = $this -> denominator;

			$int_pt = (int)($numberator / $denominator);
			if  ($int_pt == 0)
			{	
				if ($denominator < 0)
				{
					$denominator =  $denominator * (-1);
					$numberator = $numberator * (-1);
				}
				return $numberator. "/" .$denominator;
			}
			else
			{
				return $int_pt."'".abs($numberator % $denominator). "/" .abs($denominator);
			}
		}
	}

echo "Основная дробь<br>";
$fstpair = new Fraction(-2,'3');
$fstpair->outputnum();
echo "Вспомогательная дробь<br>";
$scndpair = new Fraction(3,-8);
//$scndpair->outputnum();
echo "Сложение<br>";
$addi = $fstpair ->add($scndpair);
$addi->outputnum();
echo $addi->__toString()."<br>";
echo "Вычитание<br>";
$subi = $fstpair -> sub($scndpair);
$subi->outputnum();
echo $subi->__toString()."<br>";
echo "Умножение<br>";
$mul = $fstpair->multi($scndpair);
$mul -> outputnum();
echo $mul->__toString()."<br>";
echo "Деление<br>";
$divi = $fstpair -> div($scndpair);
$divi -> outputnum();
echo $divi->__toString()."<br>";
echo "Возведение в степень<br>";
$expo = $fstpair->exp(3);
$expo -> outputnum();

phpinfo();
?>