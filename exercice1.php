<?php

require_once('vendor/autoload.php');

class Diviseur {

    private $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];

    // Constructeur de la classe
    public function __construct(int $index, int $diviseur)
    {
    
        if(!is_int($diviseur) || !is_numeric($index)) {
            throw new \Error('Entre un nombre bordel');
        }

        if($index < 0 || $index > 9) {
            throw new \Error('Entrez un index valide svp');
        }

        if($diviseur == 0) {
            throw new \Error('Tu peux pas diviser par 0, IDIOOOT');
        }

        $this->index = $index;
        $this->diviseur = $diviseur;

    }

    public function division()
    {
        return $this->valeurs[$this->index] / $this->diviseur;
    }
}

// Création d'une boucle à partir d'une condition remplie (valeurs entrées correctes)
$works = FALSE;
while(!$works) {

    try {

    $climate = new League\CLImate\CLImate;

    $input = $climate->input("Entrez l’indice de l’entier à diviser : ");
    $index = $input->prompt();

    $input = $climate->input("Entrez le diviseur : ");
    $diviseur = $input->prompt();

    $climate->output("Le résultat de la division est : " . (new Diviseur($index, $diviseur))->division());
    $works = TRUE;

    }

    catch (\Error $e)

    {
        echo $e->getMessage();
    }
}



