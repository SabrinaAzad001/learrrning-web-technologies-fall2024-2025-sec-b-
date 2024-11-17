<?php
$arr = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

echo "The 2D Arr Is:\n";
foreach ($arr as $row) {
    foreach ($row as $item) {
        echo "$item ";
    }
    echo "\n";
}

echo "\n";


echo "First arr:\n";
echo "1 2 3\n";
echo "12\n";
echo "1\n";

echo "\n";


echo "Second arr:\n";
echo "A\n";
echo "B C\n";
echo "D E F\n";
?>