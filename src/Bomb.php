<?php

namespace App;


class Bomb
{


    private int $number;
    private string $image = 'fighter.svg';
    private int $x;
    private int $y;

    public function __construct(
        string $number,
        string $image = 'fighter.svg'

    ) {
        $this->number = $number;
        $this->image = $image;
    }

    //get-set Section

    public function getX(): int
    {
        return $this->x;
    }

    public function setX($x): void
    {
        $this->x = $x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function setY($y): void
    {
        $this->y = $y;
    }


    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $id): void
    {
        $this->number = $id;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }
}
