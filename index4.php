<?php
    $jsonData = file_get_contents('rooms.json');
    $array = json_decode($jsonData, true);

    $id = $_GET['id'] ?? NULL; // Nulish coalescence

    $room = ($id && count($array) > $id) ? $array[$id] : NULL;
?>

<?php if ($room) { ?>
    <h1>Room: <?= $room['name'] ?></h1>
    <ul>
        <li>Number: <?= $room['number']?></li>
        <li>Price: $<?= $room['rate']?></li>
        <li>Discount: <?= $room['discount']?>%</li>
    </ul>
<?php } else { ?>
    <h3>No room mf</h3>
<?php } ?>
