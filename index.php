<?php
include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/Person.php';

$utenti = [
    new User("Fra", "password", "ollo@gmail.com"),
    new User("brolyno", "password", "pia_gianguzzi@brava.com"),
    new User("Ronaldo", "password", "cristiano_ronaldo@gmail.com"),
    new User("Materazzi", "password", "trex@gmail.com"),
    new User("Franz", "password", "ollo@gmail.com"),
    new User("Homerjay", "password", "pia_gianguzzi@brava.com"),
    new User("Napoleone", "password", "pia_g@br.com"),
    new User("t-rex", "password", "trex@gmail.com")

];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>php-oop-2</title>
</head>

<body>
    <div class=" container d-flex">
        <?php foreach ($utenti as $value) { ?>
            <ul>
                <li ><?php echo $value->user_name ?></li>
                <li ><?php echo $value->psw ?></li>
                <li ><?php echo $value->mail ?></li>

            </ul>

    </div>
<?php } ?>
</div>
<li>



</body>

</html>