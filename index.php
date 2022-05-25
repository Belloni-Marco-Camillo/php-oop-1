<?php 
    class Movie {
        /* creo variabili di istanza */
        public  $title;
        public  $year;
        public  $genre;
        public $overview;
        /* creo un costruttore */
        public function __construct($title, $year, $genre, $imge, $overview){
            /* inizializzo la proprietà title */
            $this -> title = $title;
            $this -> year = $year;
            $this -> genre = $genre;
            $this -> imge = $imge;
            $this-> overview=$overview;
        }
        /* creo un metodo */
        public function getDetails(){
            return $this -> title;
            return $this -> yaer;
            return $this -> genre;
            return $this -> imge;
            return $this-> overview;
        }
    }
    /* creo un istanza */
    /* $ritorno_al_futuroI = new Movie('ritorno al futuroI', 1985, 'fantascienza');
    $ritorno_al_futuroII = new Movie('ritorno al futuroII', 1989, 'fantascienza');
    $ritorno_al_futuroIII = new Movie('ritorno al futuroIII', 1990, 'fantascienza');
    var_dump ($ritorno_al_futuroI,$ritorno_al_futuroII,$ritorno_al_futuroIII); */

    $data = [
        new movie (
            'ritorno al futuro I', 
            1985, 
            'fantascienza',
            'https://m.media-amazon.com/images/I/A1+LFtgQbEL._AC_SL1500_.jpg',
            "Marty McFly è stato catapultato per errore nel 1955, grazie alla macchina del tempo ideata dal suo amico scienziato Doc. Non avendo più \"carburante\" per poter tornare nel futuro si rivolge alla versione più giovane di Doc, che nonostante l'incredulità iniziale si farà in quattro per aiutarlo. Ma nel 1955 non è solo Doc ad essere più giovane, Marty infatti si imbatte casualmente nei suoi genitori, all'epoca teenager, ma l'incontro aggiungerà altri problemi."
        ),
        new movie (
            'ritorno al futuro II', 
            1989, 
            'fantascienza',
            'https://www.nerdsrevenge.it/wp-content/uploads/2015/10/Ritorno-Al-Futuro-Parte-II.jpg',
            "Il film comincia dove terminava il primo capitolo, ovvero con Marty e Jennifer che partono insieme allo scienziato Doc, inventore della macchina del tempo, per il 2015 allo scopo di evitare che il futuro dei loro figli possa essere in pericolo. Ma la situazione precipita e ad essere in pericolo non è più il futuro, ma il passato. Marty dovrà tornare nuovamente nel 1955 e..."
        ),
        new movie (
            'ritorno al futuro III', 
            1990, 
            'fantascienza',
            'https://movieplayer.net-cdn.it/t/images/2014/08/19/raf3_poster_web_jpg_400x0_crop_q85.jpg',
            "Per questa terza, conclusiva, puntata della trilogia, Marty McFly è costretto a tornare indietro nel tempo fino al 1885 per salvare Doc, che vi era stato catapultato al termine del secondo capitolo. Questa volta tornare nel futuro sarà ancora più difficile."
        ),
    ];
    //var_dump ($data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN bootstrap -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link rel="stylesheet" href="./style.css">

    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="justify-content-between d-flex gx-5">
                <?php foreach ($data as $movie) { ?>

                    <div class="card_movie col-3">
                        <h3 class="text-center text-white" ><?php echo $movie->title ?></h3>
                        <img class="card_dimention_imge" src="<?php echo $movie->imge ?>" alt="<?php echo $movie->title ?>">
                        <div class="card_overview">
                            <p><?php echo $movie->overview ?></p>
                        </div>
                    </div>
                    
                <?php } ?>
            </div>
        </div>
        
    </div>
    
    
</body>
</html>