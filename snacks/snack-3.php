<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data
 in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post 
 associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Ciao sono Michele'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Urca Assassina',
            'text' => 'Ciao sono Urca'
        ],

    ],
    '10/04/2020' =>[
        [
            'title' => 'Post 3',
            'author' => 'UkkuUkku',
            'text' => 'chiamami Uk'
        ],
    ],
    '09/02/1987' =>[
        [
            'title' => 'Post 4',
            'author' => 'Sotto ChiTocca',
            'text' => 'Ciao Belli!'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Capitano Uncino',
            'text' => 'argh!'
        ],

    ]
]
?>

<?php
    foreach($posts as $key => $value){
        ?>
        <h2><?= "{$key}"?></h2>
        <ul>
            <?php
            foreach($value as $post){
                ?>
                <li>
                    <h4><?= $post['title']?></h4>
                    <h4><?= $post['author']?></h4>
                    <p><?= $post['text']?> </p>
                </li>
                <?php
            }
            ?>
        </ul>
        <?php
    }
    ?>