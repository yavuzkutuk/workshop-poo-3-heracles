<?php

namespace App;

class Weapon
{
    private int $damage = 10;

    private string $image = 'sword.svg';
    private float $range;

    public function __construct(float $range  = 0.5)
    {
        $this->range = $range;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return float
     */
    public function getRange(): float
    {
        return $this->range;
    }

    /**
     * @param float $range
     */
    public function setRange(float $range): void
    {
        $this->range = $range;
    }


}
