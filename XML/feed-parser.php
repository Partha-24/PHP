<?php

$url = "https://www.coralnodes.com/feed/";
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true); //returns the value in string format
curl_setopt($handle, CURLOPT_FOLLOWLOCATION, true); //handles any redirections to reach target location

$response = curl_exec($handle);
curl_close($handle);

$feed = new SimpleXMLElement($response);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data from XML</title>
</head>
<body>
    <?php foreach($feed->channel->item as $item) : ?>
        <article>
            <h2> <?= $item->title ?> </h2>
            <p> <?= $item->description ?> </p>
            <div>
                <?php 
                $dt = new DateTime($item->pubDate);
                $pub_date = $dt->format('l, F d y');
                ?>
                written by <?= $item->children('dc', true)->creator ?> on <?= $pub_date ?> 
            </div>
        </article>
    <?php endforeach; ?>
</body>
</html>
