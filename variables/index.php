<h2>Робота зі змінними:</h2>
<?php
$some = 5;
echo $some;

$some_value = 10;
echo $some_value;

echo 'Результат:';
echo $some + $some_value;

// Присвоєння одного значення усім перемінним
$one = $two = $three = $four = $five = $six = $seven = 500;
echo $one;
echo $two;
echo $three;
echo $four;
echo $five;
echo $six;
echo $seven;

/*
PHP є мовою з динамічною типізацією.
Це означає, що тип даних змінної виводиться під час виконання.
В PHP не треба вказувати перед змінною тип даних.

У PHP є десять базових типів даних:

bool ( логічний тип )
int ( цілі числа )
float ( дрібні числа )
string ( строки )
array ( масиви )
object ( об’єкти )
callable ( функції )
mixed ( будь-який тип )
resource ( ресурси )
null ( відсутність значення )

З цих типів даних перші чотири є скалярними: bool, int, float, string.
 */
?>

