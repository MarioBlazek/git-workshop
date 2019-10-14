<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
use Assert\Assertion;

$file = __DIR__ . '/../books.yml';

Assertion::file($file, 'Where is books.yml file?');

$booksFromYaml = Yaml::parseFile($file);

Assertion::isArray($booksFromYaml, 'It must be an array.');
Assertion::keyExists($booksFromYaml, 'books', 'Books must be added inside books key.');

$books = [];
foreach ($booksFromYaml['books'] as $book) {
    Assertion::count($book, 5, 'Book array must have exactly 5 items.');
    Assertion::keyExists($book, 'author', 'Book must have a author.');
    Assertion::keyExists($book, 'title', 'Book must have a title.');
    Assertion::keyExists($book, 'published', 'Book must have a publication year.');
    Assertion::keyExists($book, 'genre', 'Book must have a genre.');
    Assertion::keyExists($book, 'country', 'Book must have a country of origin.');

    $books[] = trim($book['title']);
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


