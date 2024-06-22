<?php

$discs_array = [
    [
        'img' => 'https://i0.wp.com/doyourealize.it/wp-content/uploads/2017/03/my-bloody-valentine-loveless.jpg?resize=300%2C300&ssl=1',
        'name' => 'Loveless',
        'artist' => 'My Bloody Valentine'

    ],
    [
        'img' => 'https://i0.wp.com/doyourealize.it/wp-content/uploads/2017/03/nmh5.jpg?resize=300%2C300&ssl=1',
        'name' => 'In the Aeroplane Over the Sea',
        'artist' => 'Neutral Milk Hotel'

    ],
    [
        'img' => 'https://i0.wp.com/doyourealize.it/wp-content/uploads/2017/03/tool-aenima.jpg?resize=300%2C300&ssl=1',
        'name' => 'Tool',
        'artist' => 'Ænima'

    ],
    [
        'img' => 'https://www.ondarock.it/classifiche/anni90/immagini/winner.jpg',
        'name' => 'Ok computer',
        'artist' => 'Radiohead'

    ],
    [
        'img' => 'https://i0.wp.com/doyourealize.it/wp-content/uploads/2017/03/pavement-crooked-rain-crooked-rain.jpg?resize=300%2C300&ssl=1',
        'name' => 'Crooked Rain, Crooked Rain ',
        'artist' => 'Pavement'

    ],
    [
        'img' => 'https://www.ondarock.it/classifiche/anni90/immagini/winner.jpg',
        'name' => 'Radiohead',
        'artist' => 'Radiohead'

    ],
    [
        'img' => 'https://www.ondarock.it/classifiche/anni90/immagini/winner.jpg',
        'name' => 'Radiohead',
        'artist' => 'Radiohead'

    ],
    [
        'img' => 'https://www.ondarock.it/classifiche/anni90/immagini/winner.jpg',
        'name' => 'Radiohead',
        'artist' => 'Radiohead'

    ],
    [
        'img' => 'https://www.ondarock.it/classifiche/anni90/immagini/winner.jpg',
        'name' => 'Radiohead',
        'artist' => 'Radiohead'

    ],
    [
        'img' => 'https://www.ondarock.it/classifiche/anni90/immagini/winner.jpg',
        'name' => 'Radiohead',
        'artist' => 'Radiohead'

    ],
    [
        'img' => 'https://www.ondarock.it/classifiche/anni90/immagini/winner.jpg',
        'name' => 'Radiohead',
        'artist' => 'Radiohead'

    ],
    [
        'img' => 'https://www.ondarock.it/classifiche/anni90/immagini/winner.jpg',
        'name' => 'Radiohead',
        'artist' => 'Radiohead'

    ],
];

header('Content-Type:application/json');
// trasformo l'array associativo in un fil JSON
echo json_encode($discs_array);
