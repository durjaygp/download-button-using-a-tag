<?php
$filename = "CHECK.mp4";
$file = "https://my-bucket-s3-ap-east-amazonaws.ibomma.fans/CHECK.mp4";

header("Content-disposition: attachment; filename=".$filename);
header("Content-type: video/mp4");
readfile($file);
exit;
?>
