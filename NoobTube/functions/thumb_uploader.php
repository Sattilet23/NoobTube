<?php
$thumbnail = $rid . '.jpg';

shell_exec("ffmpeg -i $video -ss 00:00:01.000 -vframes 1 $path $thumbnail");

?>