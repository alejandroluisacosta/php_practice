<?php
    $jsonData = file_get_contents('rooms.json');
    $array = json_decode($jsonData, true);
?>
    <pre>
        <?php print_r($array); ?>
    </pre>