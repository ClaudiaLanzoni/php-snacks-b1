

<!-- Dati Snack 1 -->
<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

    <!-- Dati Snack 3 -->

    <?php
 
 $db = [
     'teachers' => [
         [
             'name' => 'Michele',
             'lastname' => 'Papagni'
         ],
         [
             'name' => 'Fabio',
             'lastname' => 'Forghieri'
         ]
     ],
     'pm' => [
         [
             'name' => 'Roberto',
             'lastname' => 'Marazzini'
         ],
         [
             'name' => 'Federico',
             'lastname' => 'Pellegrini'
         ]
     ]
 ];

?>


    <!-- Dati Snack 4 -->

    <?php 
        $classe = [
            [
                'nome' => 'Gino',
                'cognome' => 'Finelli',
                'voti' => [5, 8, 9, 6]
            ],
            [
                'nome' => 'Martino',
                'cognome' => 'Pinelli',
                'voti' => [9, 6, 7, 4]
            ],
            [
                'nome' => 'Marta',
                'cognome' => 'Martinelli',
                'voti' => [6, 6, 9, 6]
            ],
            [
                'nome' => 'Sandra',
                'cognome' => 'Sandrelli',
                'voti' => [8, 8, 5, 6]
            ],
        ]

        ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

    <!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY
      es 01-01-2007 e come valore un array di post associati a quella data. 
      Stampare ogni data con i relativi post.

        Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

    <!-- 
        <p>
        <?php 

           foreach ($posts as $chiave => $valore) { ?>
                <p>
                    <?php echo ($chiave); 
                    //uguale a scrivere $keyPrint = array_keys($posts);
                    ?> :
                </p>
            
                
                <?php foreach ($valore as $element) { ?>
                    <p>
                        
                        <?php echo ($element['title']) ?> :
                        <?php echo ($element['author'])?> :
                        <?php echo ($element['text'])?>
                    
                    </p>
                    <?php 
                    
                }
           }
        
        ; ?>
        
    </p>

     -->


     <!-- Creare un array con 15 numeri casuali, 
    tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

    
    <?php 
    /**$arrayCasualNumbers = [];
    

        while (count($array) < 15) {
            $casualNumber = rand(0, 50);

            if (!in_array($casualNumber, $arrayCasualNumbers)) {
                array_push($arrayCasualNumbers, $casualNumber);
            };
        }
        
        echo var_dump($arrayCasualNumbers);
    
     * 
     */
    
    ?>
    
        <!-- Utilizzare questo array: https://pastebin.com/CkX3680A
    Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

    
    <?php 
        /**$teachers = $db['teachers'];
        $pm = $db['pm'];

       //echo var_dump($teachers); ?>

        <div class="grey_square">
        <?php
       foreach ($teachers as $insegnanti) { 
           ?>
        
            <h1>
                <?php echo ($insegnanti['name']) ?> 
                <?php echo ($insegnanti['lastname']) ?>
            </h1> 

        <?php } ; ?>

        </div>



        <div class="green_square">
            <?php
            foreach ($pm as $projectManagers) { 
                ?>
            
                <h1>
                    <?php echo ($projectManagers['name']) ?>
                    <?php echo ($projectManagers['lastname']) ?>
                </h1>
    
            <?php } ; ?>

        </div>

         * 
         */
        
        ?>



        <!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
        Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

        
            <?php 
            /**foreach ($classe as $valore) { ?>
                <h1>
                    <?php echo ($valore ['nome']); ?>
                    <?php echo ($valore ['cognome']); ?>
                    <?php echo (array_sum($valore ['voti']) / count($valore ['voti'])) ?>
                </h1>
                <?php    
            }
             */
            
             ?>

        
        <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
        Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.-->

        <?php 
        $paragrafo = 'Il paragrafo (o capoverso) è innanzitutto una porzione di testo formata da uno o più periodi e isolata da ciò che precede e ciò che segue. All’interno del paragrafo sono raggruppate porzioni di informazione omogenee, perciò il passaggio a un nuovo capoverso (il cosiddetto a capo) implica una pausa molto forte nel testo.

        Nell’editoria e nella scrittura con il computer il paragrafo è messo in evidenza con un breve rientro della riga di inizio del primo periodo del paragrafo o con una riga vuota tra un paragrafo e l’altro (paragrafo all’inglese).
        
        Con il termine paragrafo si intende anche una suddivisione interna a un capitolo, spesso dotata di titolo e isolata con soluzioni grafiche.';
        
        

        $divisorio = explode('.', $paragrafo);
        
        ; ?>

        <?php 
        foreach($divisorio as $valore) { ?>
            <div>
                <?php echo ($valore) . '.'?>
                
            </div>
            
        <?php } ; ?>

        <?php phpinfo(); ?>
        

</body>
</html>


