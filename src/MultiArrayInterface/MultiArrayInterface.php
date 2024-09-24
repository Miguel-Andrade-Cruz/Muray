<?php
namespace Minuz\Muray\MultiArrayInterface;

interface MultiArrayInterface
{
    public function struct(int $rows, int $columns): void;

    public function infill(array $values): void;

    public function acessItem(int $row, int $column): mixed;
    
    public function acessRow(int $row): array;

    public function acessColumn(int $column): array;

    public function viewAsList(): array;
}