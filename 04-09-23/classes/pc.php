<?php

namespace classes;

use classes\character;

class pc extends character
{
    //todo : ajoutez une propriété publique "pseudo"

    public string $pseudo;

    //Setter//

    public function setPseudo(string $pseudo) : void
    {
        $this->pseudo=$pseudo;
    }

    public function getPseudo(string $pseudo) : string
    {
        return $this->pseudo;
    }
}
