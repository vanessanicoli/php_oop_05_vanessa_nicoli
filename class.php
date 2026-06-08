<?php

// Crea un file chiamato class.php e crea una classe astratta di tipo Categoria, con i relativi figli (ovvero che estendono Category) seguendo questa struttura:
// Category
//     │── Attualità
//     │── Sport
//     │── Gossip
//     └── Storia
// Tutte le classi dovranno avere un metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo.


abstract class Category{
    abstract public function getMyCategory();
}

class Attualita extends Category{
    public function getMyCategory(){
        echo "Categoria: ".self::class."\n";
    }
}

class Sport extends Category{
    public function getMyCategory(){
        echo "Categoria: ".self::class."\n";
    }
}

class Gossip extends Category{
    public function getMyCategory(){
        echo "Categoria: ".self::class."\n";
    }
}

class Storia extends Category{
    public function getMyCategory(){
        echo "Categoria: ".self::class."\n";
    }
}


$attualita = new Attualita();
$sport = new Sport();
$gossip = new Gossip();
$storia = new Storia();

$attualita->getMyCategory();
$sport->getMyCategory();
$gossip->getMyCategory();
$storia->getMyCategory();