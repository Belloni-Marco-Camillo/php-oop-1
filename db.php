<?php 
    class Movie {
        /* creo variabili di istanza */
        public  $title;
        public  $year;
        public  $genre;
        /* creo un costruttore */
        public function __construct($title, $year, $genre, $imge){
            /* inizializzo la proprietà title */
            $this -> title = $title;
            $this -> year = $year;
            $this -> genre = $genre;
            $this -> imge = $imge;
        }
        /* creo un metodo */
        public function getDetails(){
            return $this -> title;
            return $this -> yaer;
            return $this -> genre;
            return $this -> imge;
        }
    }
    /* creo un istanza */
    /* $ritorno_al_futuroI = new Movie('ritorno al futuroI', 1985, 'fantascienza');
    $ritorno_al_futuroII = new Movie('ritorno al futuroII', 1989, 'fantascienza');
    $ritorno_al_futuroIII = new Movie('ritorno al futuroIII', 1990, 'fantascienza');
    var_dump ($ritorno_al_futuroI,$ritorno_al_futuroII,$ritorno_al_futuroIII); */

    $data = [
        new movie (
            'ritorno al futuroI', 
            1985, 
            'fantascienza',
            'https://m.media-amazon.com/images/I/A1+LFtgQbEL._AC_SL1500_.jpg'
        ),
        new movie (
            'ritorno al futuroII', 
            1989, 
            'fantascienza',
            'https://m.media-amazon.com/images/I/A1+LFtgQbEL._AC_SL1500_.jpg'
        ),
        new movie (
            'ritorno al futuroIII', 
            1990, 
            'fantascienza',
            'https://m.media-amazon.com/images/I/A1+LFtgQbEL._AC_SL1500_.jpg'
        ),
    ];
    var_dump ($data);
    
?>