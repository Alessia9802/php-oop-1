<?php

/* Ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
  => all'interno della classe sono dichiarate delle variabili d'istanza
  => all'interno della classe è definito un costruttore
  => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */

class Movie {

    public $title;
    public $year;
    public $hours;
    public $plot;
    public $actors;
    public $director;

    public function setCoutry($country){
        if ($country == 'America'){
            $this-> $country = 'America';
        }
    }


    function __construct (String $title,float $year, String $hours, String $plot, String $actors, String $director){
        $this ->title = $title;
        $this ->year = $year;
        $this ->hours = $hours;
        $this ->plot = $plot;
        $this ->actors = $actors;
        $this ->director = $director;
    }

}


$Titanic = new Movie('Titanic', 1997,'3 hours 14 min','Il transatlantico Titanic, considerato un gioiello tecnologico ed il più lussuoso piroscafo da crociera mai realizzato, salpa dall Inghilterra il dieci aprile del 1912 con oltre 1500 passeggeri a bordo per il suo viaggio inaugurale. I viaggiatori sono collocati in tre classi, riflesso delle differenze sociali.','Leonardo di Caprio, Kate Winslet, Billy Zane, Kathy Bates', 'James Cameron' );
var_dump($Titanic);
$Titanic->setCoutry('America');
$Titanic->title = 'Titanic';
$Titanic->year = 1997;
$Titanic->hours = '3 hours 14 min';
$Titanic->plot = 'Il transatlantico Titanic, considerato un gioiello tecnologico ed il più lussuoso piroscafo da crociera mai realizzato, salpa dall Inghilterra il dieci aprile del 1912 con oltre 1500 passeggeri a bordo per il suo viaggio inaugurale. I viaggiatori sono collocati in tre classi, riflesso delle differenze sociali.';
$Titanic->actors = 'Leonardo di Caprio, Kate Winslet, Billy Zane, Kathy Bates';
$Titanic->director = 'James Cameron';
//echo $Titanic-> actors;

