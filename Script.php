<?php
require 'Student.php';
echo "ID, F.Name, L.Name, Email";
var_dump($argv);
$x = new Student($argv[1], $argv[2], $argv[3], $argv[4]);
$x->insert();