<?php

require_once('src/clients/NewYorkTimes/rss_feed.php');
$rss = new rss();
$rssContent = $rss->consultarrss();
echo $rssContent;