<meta charset="UTF-8">
<?php

function tmc_file_get_contents_curl($url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
		curl_setopt($ch, CURLOPT_URL, $url);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

$url = 'https://www.instagram.com/erkankavas/media/';
$content = tmc_file_get_contents_curl($url);


$json = json_decode($content, true);

foreach ($json['items'] as $item) {

$url = $item['images']['standard_resolution']['url'];

$text = $item['caption']['text'];

echo "<img src='".$url."' width='300px' height='200px'>";
echo "<br />";
echo $text;
echo "<br /><br />";
   
}
?>
