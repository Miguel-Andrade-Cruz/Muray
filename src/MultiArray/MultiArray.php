<?php
namespace Minuz\Muray\MultiArray;

use Minuz\Muray\MultiArrayInterface\MultiArrayInterface;

abstract class MultiArray implements MultiArrayInterface
{
    public function __construct(int $rows, int $columns, array $values)
    {
        $this->struct($rows, $columns);
        $this->infill($values);
    }

}