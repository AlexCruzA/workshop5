<?php
require 'Student.php';
echo "ID, F.Name, L.Name, Email";

$x = new Student();
$x->insert($argv[1], $argv[2], $argv[3], $argv[4]);