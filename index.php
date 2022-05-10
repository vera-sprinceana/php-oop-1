<?php
    class Movie{
        public $poster;
        public $title;
        public $director;
        public $yearOfRelease;
        public $genre;
        public $price;
        public $sale;

    //CONSTRUCT
    public function __construct($_poster, $_title, $_director, $_yearOfRelease, $_genre, $_price){
        $this -> poster = $_poster;
        $this -> title = $_title;
        $this -> director = $_director;
        $this -> yearOfRelease = $_yearOfRelease;
        $this -> genre = $_genre;
        $this -> price = $_price;
    } 
    
    public function setSale($price){
        if($price >12){
            $this -> sale =15;
        }

    }
    };
    
    //prima istanza
    $interstellar= new Movie("https://pad.mymovies.it/filmclub/2014/01/001/locandina.jpg", "Interstellar", " Christopher Nolan", 2014, "Sci-fi/Avventura", 18.50);
    echo "<img src=". $interstellar -> poster .  ">";
    echo "<h1>". $interstellar -> title ."</h1>";
    echo "<h3>" . $interstellar -> director . "</h3>";
    echo "<h4>" . $interstellar -> yearOfRelease . "</h4>";
    echo "<h4>" . $interstellar -> genre . "</h4>";
    echo "<h4>" . $interstellar -> price . "€ </h4>";
    //metodo
    echo $interstellar ->setSale($interstellar ->price);
    echo "<p> -" . $interstellar ->sale . " %</p>" ;
   //seconda istanza
    $tenet= new Movie("https://m.media-amazon.com/images/I/713oIDF3BSL._AC_SY679_.jpg", "Tenet", "Christopher Nolan", 2020, "Azione/Sci-fi", 14.90);
    echo "<img src=". $tenet -> poster .  ">";
    echo "<h1>". $tenet -> title ."</h1>";
    echo "<h3>" . $tenet -> director . "</h3>";
    echo "<h4>" . $tenet -> yearOfRelease . "</h4>";
    echo "<h4>" . $tenet -> genre . "</h4>";
    echo "<h4>" . $tenet -> price . "€ </h4>";
    //metodo
    echo $tenet ->setSale($tenet ->price);
    echo "<p> -" . $tenet ->sale . " %</p>" ;
?>
