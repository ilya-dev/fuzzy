<?php

$rows  = ['f', 'fo', 'foo', 'foob', 'fooba', 'foobar'];
$fuzzy = new Fuzzy\Fuzzy;
$query = 'foobar';
$fuzzy->search($rows, $query, 0);
$fuzzy->search($rows, $query, 1);
$fuzzy->search($rows, $query, 2);
$fuzzy->search($rows, $query, 3);

