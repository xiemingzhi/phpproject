<?php
$myfile = fopen("README.md", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "\n";
}
fclose($myfile);
?>