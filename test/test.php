<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
use Assert\Assertion;

$file = __DIR__ . '/../writers.yml';

Assertion::file($file, 'Where is writers.yml file?');

$writers = Yaml::parseFile($file);

Assertion::isArray($writers, 'It must be an array.');
Assertion::keyExists($writers, 'writers', 'Writers must be insider writers key.');

$books = [];
foreach ($writers['writers'] as $writer) {
    Assertion::count($writer, 5, 'Writer array must have exactly 5 items.');
    Assertion::keyExists($writer, 'name', 'Writer must have a name.');
    Assertion::keyExists($writer, 'book', 'Writer must have a book.');
    Assertion::keyExists($writer, 'published', 'Writer\'s book must have a publication year.');
    Assertion::keyExists($writer, 'genre', 'Writer\'s book must have a genre.');
    Assertion::keyExists($writer, 'country', 'Writer must have a country of origin.');

    $books[] = trim($writer['book']);
}


$values = array_count_values($books);

foreach ($values as $key => $value) {
    Assertion::lessThan($value, 2, 'Duplicate titles are not allowed.');
}

$values = array_keys($values);

$copied = $values;
foreach ($values as $value) {

    $diff = array_diff($copied, [$value]);

    foreach ($diff as $diffed) {
        Assertion::greaterThan(levenshtein($diffed, $value), 2, "Are you trying to be a little sneaky bastard?");
    }
}


