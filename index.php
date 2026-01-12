<?php

// Classe Post
// Title e category
// 2 categorie: cucina e sport

abstract class Category
{
    abstract public function getName();

    public function saluta()
    {
        echo "ciao";
    }
}

class Cucina extends Category
{
    public function getName()
    {
        return 'Cucina';
    }
}

class Sport extends Category
{
    public function getName()
    {
        return 'Sport';
    }
}

class Finanace extends Category
{
    public function getName()
    {
        return 'Finanza';
    }
}







class Post
{
    public $title;
    public $category;

    public function __construct(string $string1, Category $string2) // Dependency Injection
    {
        $this->title = $string1;
        $this->category = $string2;
        $this->category->saluta();
    }

    public function showPost()
    {
        echo "Il post ha come titolo {$this->title} e categoria: {$this->category->getName()} \n";
    }
}

$articolo1 = new Post('Ricetta della Carbonara', new Cucina());
$articolo2 = new Post('Campioni del Mondo', new Sport());
$articolo3 = new Post('Metodo per fare soldi', new Finanace());


$articolo1->showPost();
$articolo2->showPost();
$articolo3->showPost();
