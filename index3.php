<?php
    $jsonData = file_get_contents('rooms.json');
    $array = json_decode($jsonData, true);
?>

<pre>
    <ol>
        <?php foreach ($array as $room): ?>
            <li><?= $room['name'] ?></li>
            <ul>
                <li>Number: <?= $room['number'] ?></li>
                <li>Price: $<?= $room['rate'] ?></li>
                <li>Discount: <?= $room['discount'] ?>%</li>
            </ul>
        <?php endforeach; ?>
    </ol>
</pre>