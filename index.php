

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

    <?php 
    
        $teachers = $db['teachers'];
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



</body>
</html>


