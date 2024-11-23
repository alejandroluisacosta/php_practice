<?php

    $json_file = file_get_contents('rooms.json');
    $rooms_json = json_decode($json_file);

?>

    <pre>
        <?php print_r($rooms_json); ?> 
    </pre>