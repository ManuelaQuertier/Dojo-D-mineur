<?php

namespace App;

class Arena{
    
    private array $bombs;
    private int $size;
    private array $tiles;

    public function __construct (array $bombs, array $tiles)
    {
        $this->bombs = $bombs;
        $this->size = 10;
        $this->tiles = $tiles;
    }

    //get-set Section

    public function getBombs(): array
    {
        return $this-> bombs;
    }

    public function setBombs(array $bombs):void
    {
        $this-> bombs = $bombs;
    }

    public function getBomb(): Bomb
    {
        return $this-> bomb;
    }

    public function setBomb(Bomb $bomb):void
    {
        $this-> bomb = $bomb;
    }

    public function getSize(): int
    {
        return $this-> size;
    }

    public function setSize(int $size):void
    {
        $this-> size = $size;
    }

    public function getTiles(): array
    {
        return $this->tiles;
    }

    public function setTiles(array $tiles): void
    {
        $this->tiles= $tiles;
    }
}