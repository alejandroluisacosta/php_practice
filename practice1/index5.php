<?php
    $mysqli = new mysqli("localhost","root","Aa197356482!","miranda");
    
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      
      $rooms = $mysqli -> query('SELECT * FROM rooms ORDER BY id DESC');
      $row = $rooms -> fetch_assoc();
?>

<ol>
    <?php foreach ($rooms as $room): ?>
        <li><?= $room['name'] ?></li>
        <ul>
            <li>Number: <?= $room['id'] ?></li>
            <li>Price: $<?= $room['rate'] ?></li>
            <li>Discount: <?= $room['discount'] ?>%</li>
        </ul>
    <?php endforeach; ?>
</ol>