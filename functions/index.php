<h2>Робота з функціями:</h2>
<h3>Функція isset()</h3>
<?php
$user = "Іван";

// Функуція типу if else
// Функція isset() перевіряє, чи існує змінна та чи ініціалізована вона
if (isset($user))
    echo "Змінна існує - це $user.";
else
    echo "Змінної не існує.";
?>
<br>
<h3>Функція empty()</h3>
<?php
$str = "";

// Функція empty() перевіряє, чи існує якийсь текст у рядку
if (empty($str))
    echo "Рядок пустий.";
else
    echo "Рядок не пустий - $str.";
?>
<br>
<h3>Функція empty()</h3>
<?php
echo "Тип значення true - " . gettype(true) . "<br>"; // bool (логічний тип)
echo "Тип значення 42 - " . gettype(42) . "<br>"; // int (цілі числа)
echo "Тип значення 3.14 - " . gettype(3.14) . "<br>"; // float (дробові числа)
echo "Тип значення 'Hello, world!' - " . gettype('Hello, world!') . "<br>"; // string (рядки)
echo "Тип значення [1, 2, 3] - " . gettype([1, 2, 3]) . "<br>"; // array (масиви)

class MyClass
{
}

$object = new MyClass();
echo "Тип значення \$object - " . gettype($object) . "<br>"; // object (об’єкти)

function myFunction()
{
}

echo "Тип значення myFunction - " . gettype('myFunction') . "<br>"; // callable (функції)

$variable = 42;
echo "Тип значення \$variable - " . gettype($variable) . "<br>"; // mixed (будь-який тип, в даному випадку int)

$file = fopen("example.txt", "w");
echo "Тип значення \$file - " . gettype($file) . "<br>"; // resource (ресурси)
fclose($file);

echo "Тип значення null - " . gettype(null) . "<br>"; // null (відсутність значення)
?>
<br>
<h3>Функції для перевірок типів значень, які починаються з is_:</h3>
<?php
// Функції, які починаються з is_ виконують перевірку типів значень
// Перевірка, чи значення є рядком
echo "'aaaa' - це рядок? " . (is_string('aaaa') ? 'Так' : 'Ні') . "<br>";
echo "123 - це рядок? " . (is_string(123) ? 'Так' : 'Ні') . "<br>";

// Перевірка, чи значення є цілим числом
echo "123 - це ціле число? " . (is_int(123) ? 'Так' : 'Ні') . "<br>";
echo "'123' - це ціле число? " . (is_int('123') ? 'Так' : 'Ні') . "<br>";

// Перевірка, чи значення є дробовим числом
echo "3.14 - це дробове число? " . (is_float(3.14) ? 'Так' : 'Ні') . "<br>";
echo "3 - це дробове число? " . (is_float(3) ? 'Так' : 'Ні') . "<br>";

// Перевірка, чи значення є булевим
echo "true - це булеве значення? " . (is_bool(true) ? 'Так' : 'Ні') . "<br>";
echo "0 - це булеве значення? " . (is_bool(0) ? 'Так' : 'Ні') . "<br>";

// Перевірка, чи значення є масивом
echo "[1, 2, 3] - це масив? " . (is_array([1, 2, 3]) ? 'Так' : 'Ні') . "<br>";
echo "'array' - це масив? " . (is_array('array') ? 'Так' : 'Ні') . "<br>";
?>
<?php
/*

*/
?>
