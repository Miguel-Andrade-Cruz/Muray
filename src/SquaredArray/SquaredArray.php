<?php
namespace Minuz\Muray\SquaredArray;

use Minuz\Muray\MultiArray\MultiArray;

class SquaredArray extends MultiArray
{
    private int $rows;
    private int $columns;
    private array $squaredArray;


    public function __construct(int $rows, int $columns, array $values)
    {
        parent::__construct($rows, $columns, $values);
    }
    
    
    
    public function infill(array $values): void
    {
        $valuesCount = count($values);
        for ( $row = $currentValue = 0; $row <= $this->rows-1; $row++ ) {
            
            for ( $column = 0; $column <= $this->columns-1 && $currentValue <= $valuesCount-1; $column++ ) {
                $this->squaredArray[$row][$column] = $values[$currentValue];
                $currentValue++;
            }
        }
    }
    
    
    
    public function struct(int $rows, int $columns): void
    {
        $preparedArray = [];
        for ( $rowIndex = 0; $rowIndex <= $rows-1; $rowIndex++ ) {

            for ( $columnIndex = 0; $columnIndex <= $columns-1; $columnIndex++ ) {
                $preparedArray[$rowIndex][$columnIndex] = null;
            }
        }

        $this->rows = $rows;
        $this->columns = $columns;
        $this->squaredArray = $preparedArray;
    }



    public function acessItem(int $row, int $column): mixed
    {
        if ( ! isset($this->squaredArray[$row][$column]) ) {
            return false;
        }
        return $this->squaredArray[$row][$column];
    }



    public function acessRow(int $row): array
    {
        return $this->squaredArray[$row];
    }



    public function acessColumn(int $column): array
    {
        $column = array_map(function ($row) use ($column) {
            return $row[$column];
        }, $this->squaredArray);
        return $column;
    }



    public function viewAsList(): array
    {
        return $this->squaredArray;
    }



    public function getRows(): int
    {
        return $this->rows;
    }



    public function getColumns(): int
    {
        return $this->columns;
    }
}