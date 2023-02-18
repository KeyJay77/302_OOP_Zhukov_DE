<?php
	include_once 'Fraction.php';
	function runTest()
	{
		// String representation test
		$m1 = new Fraction(4, 8);
		$correct = "1/2";
		echo "Ожидается: $correct" . "<br>";
		echo "Получено: $m1" . "<br>";
		if ($m1 == $correct) {
			echo "Тест пройден"."<br>";
		} else {
			echo "Тест НЕ ПРОЙДЕН"."<br>";
		}

		// Adding test
		$m2 = new Fraction(1, 4);
		$m3 = $m1->add($m2);
		$correct = "3/4";
		echo "Сложение"."<br>";
		echo "Ожидается: $correct" . "<br>";
		echo "Получено: " . $m3 . "<br>";
		if ($m3 == $correct) {
			echo "Тест пройден"."<br>";
		} else {
			echo "Тест НЕ ПРОЙДЕН"."<br>";
		}	

		// Subtraction test
		$m4 = new Fraction(-5, 2);
		$m5 = $m4->sub($m2);
		$correct = "-2'3/4";
		echo "Вычитание"."<br>";
		echo "Ожидается: $correct" . "<br>";
		echo "Получено: " . $m5 . "<br>";
		if ($m5 == $correct) {
			echo "Тест пройден"."<br>";
		} else {
			echo "Тест НЕ ПРОЙДЕН"."<br>";
		}

		// Multiplication test
		$m6 = new Fraction(7,9);
		$m7 = $m6->multi($m2);
		$correct = "7/36";
		echo "Умножение"."<br>";
		echo "Ожидается: $correct" . "<br>";
		echo "Получено: " . $m7 . "<br>";
		if ($m7 == $correct) {
			echo "Тест пройден"."<br>";
		} else {
			echo "Тест НЕ ПРОЙДЕН"."<br>";
		}	

		// Division test
		$m8 = new Fraction(4,-7);
		$m9 = $m8->div($m2);
		$correct = "-2'2/7";
		echo "Деление"."<br>";
		echo "Ожидается: $correct" . "<br>";
		echo "Получено: " . $m9 . "<br>";
		if ($m9 == $correct) {
			echo "Тест пройден"."<br>";
		} else {
			echo "Тест НЕ ПРОЙДЕН"."<br>";
		}	

		// Exponentation test
		$m10 = new Fraction(-3,5);
		$m11 = $m10->exp(3);
		$correct = "-27/125";
		echo "Возведение в степень"."<br>";
		echo "Ожидается: $correct" . "<br>";
		echo "Получено: " . $m11 . "<br>";
		if ($m11 == $correct) {
			echo "Тест пройден"."<br>";
		} else {
			echo "Тест НЕ ПРОЙДЕН"."<br>";
		}	
	}
?>