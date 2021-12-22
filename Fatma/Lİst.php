<?php
$myfile = fopen("Yemekler.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Yemekler.txt"));
fclose($myfile);

