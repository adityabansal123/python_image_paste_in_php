<?php
        
$pyscript = 'C:\\Apache24\\htdocs\\test\\main.py';
$python = 'C:\\Users\\eadit\\AppData\\Local\\Programs\\Python\\Python37\\python.exe';

$p1 = 'C:\\Apache24\\htdocs\\test\\hrv.png';
$p2 = 'C:\\Apache24\\htdocs\\test\\stamp.jpg';
$p3 =  'C:\\Apache24\\htdocs\\test\\test\\demo.png';
$p4 = '"Business Developer"';
$p5 = "C:\\Apache24\\htdocs\\test\\icon.png";

$cmd = "$python $pyscript " . $p1 . " "  . $p2 . " " . $p3 . " " . $p4 . " " . $p5;
if(exec($cmd))
    echo "Success";