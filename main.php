<?php

$fp = fopen('/tmp/rust_cli_consumer_test' . $_SERVER["WORKER"], 'w');

while($f = fgets(STDIN)){
    $data = explode(",", $f);
    $id = array_shift($data);
    fwrite($fp, $id.",".array_sum($data));
}

fclose($fp);
