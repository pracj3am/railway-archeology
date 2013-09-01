<?php
$fp = fopen('data.csv', 'r');
$data = [];
while ($row = fgetcsv($fp)) {
	$lt = explode(',', $row[2]);
	$latitude = round($lt[0] + $lt[1]/60, 5);
	$lt = explode(',', $row[3]);
	$longitude = round($lt[0] + $lt[1]/60, 5);
	$data[] = [
		'photo' => $row[0],
		'datetime' => $row[1],
		'latitude' => $latitude,
		'longitude' => $longitude,
		'title' => $row[4]
	];
}

echo 'data = ';
echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
