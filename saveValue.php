<?php
$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];
$pressure = $_GET['pressure'];

$json = file_get_contents('values.json');
$data = json_decode($json, true);

$newData = array(
  'temperature' => $temperature,
  'humidity' => $humidity,
  'pressure' => $pressure
);

$data[] = $newData;

$newJson = json_encode($data);
file_put_contents('values.json', $newJson);

echo '1';
?>
