<?php

$rooms = [
    ["ID" => 1, "Name" => "Big Room", "Number" => "A-123", "Price" => 280, "Discount" => 15],
    ["ID" => 2, "Name" => "Bigger Room", "Number" => "B-234", "Price" => 350, "Discount" => 5],
    ["ID" => 3, "Name" => "Small Room", "Number" => "C-456", "Price" => 200, "Discount" => 15],
];

echo "<pre>";
print_r($rooms);
echo "</pre>";
?>

// Anotha 

<pre>
    <?= print_r($rooms) ?>
</pre>
