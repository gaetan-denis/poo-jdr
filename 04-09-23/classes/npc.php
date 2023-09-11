<?php

namespace classes;

use classes\character;

class npc extends character
{
   //todo : ajoutez une propriété privée "killed", avec son getter et son setter
    private int $killed;

    //Setter//

    public function setKilled($killed) : void
    {
        $this->killed=$killed;
    }

    public function getKilled(): int
    {
        return $this->killed;
    }

    // Implémentation d'une méthode qui compte le nombre de fois ou le npc est tué //


}
