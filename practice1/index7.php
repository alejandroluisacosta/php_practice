<?php
    $mysqli = new mysqli("localhost","root","Aa197356482!","miranda");
    
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      
      $rooms = $mysqli -> query('SELECT * FROM rooms ORDER BY id DESC');
      $row = $rooms -> fetch_assoc();

      $name = $_GET['search'] ?? NULL;

      if ($name !== NULL) {
        $rooms = $mysqli -> query("SELECT * FROM rooms WHERE name LIKE '{$name}%'");
        $rows = $rooms -> fetch_assoc();
      }
?>

<?php if ($name !== NULL) { ?>
    <?php if (!$rooms->num_rows) { ?>
        <h1>No rooms</h1>
    <?php } else { ?>
        <a href="index7.php"><- All rooms</a>
        <h1>Results</h1>
        <form>
            Name: <input type="text" name="search"><br>
            <input type="submit">
        </form>
        <?php foreach ($rooms as $room): ?>
            <h3><?= $room['name'] ?></h3>
            <ul>
                <li>Number: <?= $room['id']?></li>
                <li>Price: $<?= $room['rate']?></li>
                <li>Discount: <?= $room['discount']?>%</li>
            </ul>
        <?php endforeach ?>
    <?php } ?>
<?php } else { ?>
    <h1>Search rooms</h1>
    <form>
        Name: <input type="text" name="search"><br>
        <input type="submit">
    </form>
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
<?php } ?>