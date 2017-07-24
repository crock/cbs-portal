<?php

function buildURL() {
    include("config.php");

    $url = 'https://api.minetools.eu/ping/' . $serverIP . '/' . $serverPort;

    return $url;
}

function fetchJSON($x) {
    $response = file_get_contents($x) or die('Unable to fetch contents!');
    return $response;
}

function output2file($y) {
    $obj = json_decode($y);

    $online = $obj->players->online;

    $file = fopen('js/player_count.txt', 'w');
    fwrite($file, $online);
    fclose($file);
}

function main() {
    output2file(fetchJSON(buildURL()));
}

main();

?>
