<?php 

    $id = $_GET['id'] ?? NULL;

    $mysqli = new mysqli("localhost","root","Aa197356482!","miranda");
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    if ($id !== NULL) {
        $row = $mysqli -> query('SELECT * FROM rooms WHERE id='.$id.''); // 🚨 Injection Warning
        $room = $row -> fetch_assoc();
    }
?>

<?php if ($room) { ?>
    <h1>Room: <?= $room['name'] ?></h1>
    <ul>
        <li>Number: <?= $room['id']?></li>
        <li>Price: $<?= $room['rate']?></li>
        <li>Discount: <?= $room['discount']?>%</li>
    </ul>
<?php } else { ?>
    <h3>No room</h3>
<?php } ?>