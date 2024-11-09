<?php

$file = 'views.txt';

if (!file_exists($file)) {
    file_put_contents($file, "0");
}

$views = (int)file_get_contents($file);

$views++;

file_put_contents($file, $views);

echo json_encode(["views" => $views]);
?>