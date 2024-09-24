<?php
require_once __DIR__ . '/vendor/autoload.php';

use Minuz\Muray\SquaredArray\SquaredArray;

$example = new SquaredArray(3, 2, ['A1', 'A2', 'A3','A4', 'A5']);

var_dump($example->acessColumn(0));