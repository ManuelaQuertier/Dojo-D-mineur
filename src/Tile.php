<?php

namespace App;

class Tile
{
    protected string $image = '';
    private int $x;
    private int $y;


    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function setX(int $x): void
    {
        $this->x = $x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function setY(int $y): void
    {
        $this->y = $y;
    }

    public function getImage(int $id): string
    {
        return '/assets/images/'.$id.'.svg';
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function checkBomb(int $x, int $y, array $bombs): int
    {
        $nbBomb = 0;
        for ($ywork = $y-1; $ywork <= $y + 1; $ywork++) {
            for ($xwork = $x-1; $xwork <= $x + 1; $xwork++) {
                foreach ($bombs as $bomb) {
                    if ($bomb->getX() === $xwork && $bomb->getY() === $ywork) {
                        $nbBomb++;
                    }
                }
            }
        }
        return $nbBomb;
    }
}
