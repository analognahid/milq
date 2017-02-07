<?php

// ARRAYS
//
// An array is a data structure consisting of a collection of elements (values or variables)

$food = ['oranges', 'strawberries', 'lemons'];

$x = $food[0];      // The first element is at index 0
$y = $food[1];      // The second element is at index 1
$z = $food[2];      // The third element is at index 2

echo '<p>I like ' . $x . ', ' . $y . ', and ' . $z . '.</p>';



// COUNT ELEMENTS IN AN ARRAY

$fruits = ['Apple', 'Banana', 'Watermelon', 'Peach', ' Nectarine'];
$num_fruits = count($fruits);     // The variable 'num_fruits' is 5 (the number of elements of the array 'fruits')
echo '<p>' . $num_fruits . '</p>';



// ADD AN ELEMENT TO AN ARRAY

$names = ['Nacho', 'Lola', 'David'];

array_splice($names, 2, 0, 'Alba');  // Add 'Alba' at index 2.         Result: ['Nacho', 'David', 'Alba', 'Lola']
array_unshift($names, 'Álvaro');     // Add 'Álvaro' at the beginning. Result: ['Álvaro', 'Nacho', 'David', 'Alba', 'Lola']
array_push($names, 'Marta');         // Add 'Marta' at the end.        Result: ['Álvaro', 'Nacho', 'David', 'Alba', 'Lola', 'Marta']

print_r($names);
echo '<br />';


// MODIFY AN ARRAY ELEMENT

$ages = [43, 72, 32, 22, 65];

$ages[3] = 57;                 // Modify the element at index 3. Result: [43, 72, 32, 57, 65]
$ages[0] = 6;                  // Modify the first element.      Result: [6, 72, 32, 57, 65]
$ages[count($ages) - 1] = 12;  // Modify the last element.       Result: [6, 72, 32, 57, 12]

print_r($ages);
echo '<br />';


// REMOVE AN ARRAY ELEMENT

$colours = ['Blue', 'Orange', 'Green', 'Yellow', 'White'];

array_splice($colours, 2, 1);  // Remove the element at index 2. Result: ['Blue', 'Orange', 'Yellow', 'White']
array_shift($colours);         // Remove the first element.      Result: ['Orange', 'Yellow', 'White']
array_pop($colours);           // Remove the last element.       Result: ['Orange', 'Yellow']

print_r($colours);
echo '<br />';


// REVERSE ELEMENTS IN AN ARRAY

$numbers = [4, 5.6, -2.4, 20];
$animals = ['Dog', 'Whale', 'Cat', 'Fox'];

$numbers_reversed = array_reverse($numbers);
$animals_reversed = array_reverse($animals);

print_r($numbers_reversed); echo '<br />';
print_r($animals_reversed); echo '<br />';



// SORT ELEMENTS IN AN ARRAY

$numbers_sorted = $numbers;
sort($numbers_sorted);
$animals_sorted = $animals;
sort($animals_sorted);
print_r($numbers_sorted); echo '<br />';
print_r($animals_sorted); echo '<br />';



// MULTIDIMENSIONAL ARRAYS

$a = [8, 1];
$b = [3, 5, 7, 6];
$c = [4, 9, 2];

$multi = [$a, $b, $c];

print_r($multi); echo '<br />';
echo $multi[1][3];            // Prints the number 6

?>