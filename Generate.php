<?php

require_once 'Random.php';
require_once 'FileUtility.php';

$persons = Random::generate300People(300);
FileUtility::writeFile('persons.csv', $persons);

echo "300 random records have been generated and saved to the CSV \"persons.csv\"";

?>