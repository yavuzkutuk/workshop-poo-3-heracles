<?php


namespace App;


class Arena
{

    private ?Hero $hero;

    private array $monsters;

    private int $size;

    public function __construct(Hero $hero, array $monsters, int $size=10)
    {
        $this->hero = $hero;
        $this->monsters = $monsters;
        $this->size = $size;
    }

    /**
     * @return Hero|null
     */
    public function getHero(): ?Hero
    {
        return $this->hero;
    }

    /**
     * @param Hero|null $hero
     */
    public function setHero(?Hero $hero): void
    {
        $this->hero = $hero;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return array
     */
    public function getMonsters(): array
    {
        return $this->monsters;
    }

    /**
     * @param array $monsters
     */
    public function setMonsters(array $monsters): void
    {
        $this->monsters = $monsters;
    }

    public function getDistance(Fighter $fighter, Fighter $enemy): float
    {
        return sqrt((($enemy->getX() - $fighter->getX())**2) + (($enemy->getY() - $fighter->getY())**2));
    }

    public function touchable(Fighter $fighter, Fighter $enemy)
    {
        return ($this->getDistance($fighter, $enemy)<=$enemy->getRange())? true:false;
    }

}
