<?php
    include __DIR__ . '/classes/User.php';
    include __DIR__ . '/classes/Person.php';

    $utenti = [
        new User("Fra", "Oli", "ollo@gmail.com" ),
        new User("pia", "gianguzzi", "pia_gianguzzi@brava.com"),
        new User("pio", "gianzi", "pia_g@br.com"),
        new User("t-rex", "rettile", "trex@gmail.com")
    ];

    foreach($utenti as $utente){
        var_dump($utente->user_name);
    }
