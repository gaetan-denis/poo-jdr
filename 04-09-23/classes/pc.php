<?php

namespace classes;

use classes\character;

class pc extends character
{
    //todo : ajoutez une propriété publique "pseudo"

    public string $pseudo;

    //Construct//

   public function __construct(int $id, string $name, string $pseudo)
   {
       parent::__construct($id,$name);
       $this->pseudo=$pseudo;
       $this->name=$pseudo;
   }

    //Setter//

    public function setPseudo(string $pseudo) : void
    {
        $this->pseudo=$pseudo;
    }

    //Getters//

    public function getPseudo(string $pseudo) : string
    {
        return $this->pseudo;
    }
}
