<?php

// Crea un nuovo file chiamato index.php e, importando la classe appena creata, crea una classe Post con i seguenti attributi:
// - Titolo
// - Categoria
// - Tag
// Crea delle istanze di classe Post, iniettando la dipendenze Categoria all’interno dell’attributo dedicato. Crea anche dei metodi per visualizzare gli articoli completi.

require_once 'class.php';

class Post{
    public $title;
    public $category;
    public $tag;

    public function __construct($title, Category $category, $tag){
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
    }

    public function printPost(){
        echo "Titolo: {$this->title}\n";
        echo $this->category->getMyCategory();
        echo "Tag: {$this->tag} \n\n";
    }
}

$post1 = new Post('La rivoluzione green parte dai tetti', new Attualita(), 'news');
$post2 = new Post('Dalla panchina alla gloria', new Sport(), 'sport');
$post3 = new Post('Avvistati a Ibiza!', new Gossip(), 'gossip');
$post4 = new Post('L\'enigma della flotta perduta', new Storia(), 'history');

$post1->printPost();
$post2->printPost();
$post3->printPost();
$post4->printPost();