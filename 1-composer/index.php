<?php 
    require "vendor/autoload.php";

    use App\classes\Member;
    use Cocur\Slugify\Slugify;
    
    //require("src/classes/Member.php");
    $member = new Member("John", "Doe");
    dump($member);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet PHP COMPOSER POO</title>
</head>
<body>
    <h1>Projet PHP COMPOSER POO</h1>
    <h2>Fiche détaillée d'un membre :</h2>
    
    <dl>
        <dt>Prénom</dt>
        <dd><?= $member->getFirstName() ?></dd>
        <dt>Nom</dt>
        <dd><?= $member->getLastName() ?></dd>
        <dt>Date</dt>
        <dd><?= $member->getDate()->format('Y-m-d H:i:s') ?></dd>
    </dl>

    <h2>Display d'un membre : <?= $member->printMember() ?></h2>

    <h2>Test du slug par bundle externe</h2>
    <?php
        $slugify = new Slugify();
        echo $slugify->slugify($member->getFirstName() . ' ' . $member->getLastName() . ' ' . $member->getDate()->format('Y-m-d H:i:s')); 
    ?>
</body>
</html>