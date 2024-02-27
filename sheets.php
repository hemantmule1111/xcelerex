<?php 

require __DIR__ . '/vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('Google Sheets with Primo');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);
$spreadsheetId = "1aclTIowtjlYqL7wT-tHKHkrvJ7asJMLPuAfcAMBlaDQ";

$range = "xcelerex"; // Sheet name

$values = [
	[
	    $_POST['name'],
        $_POST['phone'],
        $_POST['email'],
        $_POST['message']
    ],
];
// echo "<pre>";print_r($values);echo "</pre>";exit;
$body = new Google_Service_Sheets_ValueRange([
	'values' => $values
]);
$params = [
	'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->append(
	$spreadsheetId,
	$range,
	$body,
	$params
);

if($result->updates->updatedRows == 1){
	header('Location: index.php');
    exit;
} else {
	echo "Fail";
}