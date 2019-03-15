<?php

class Game
{
    private $players = [];

    public function addPlayer($character)
    {
        $this->players[] = $character;
        return $this;
    }
}