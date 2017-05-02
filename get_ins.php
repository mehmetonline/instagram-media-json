<meta charset="UTF-8">
<?php

$url = 'https://www.instagram.com/erkankavas/media/';
$content = file_get_contents($url);


$json = json_decode($content, true);

foreach ($json['items'] as $item) {

$url = $item['images']['standard_resolution']['url'];

$text = $item['caption']['text'];

echo "<img src='".$url."' width='300px' height='200px'>";
echo "<br />";
echo $text;
echo "<br />";
echo "<br />";
   
}
?>

