<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recreation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>public/js/application.js"></script>
    <style>
	    body {
            background-image: url('<?php echo URL."public".DIRECTORY_SEPARATOR."img".DIRECTORY_SEPARATOR."bg.jpeg"; ?>');
            background-size: 100%;
	    }
    </style>
</head>
	<body>	
    <div id="nav1">
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="javascript:history.go(-1)">Retour</a></li>
            </ul>
        </nav>
    </div>

    <nav class="nav2">
        <ul id="menu-demo2">
            <li style="z-index: 10"><a href="#">Français</a>
                <ul style="margin-top: 12px;">
                    <li><a href="<?php echo URL."francais".DIRECTORY_SEPARATOR."lecons"; ?>">Leçons</a></li>
                    <li><a href="<?php echo URL."francais".DIRECTORY_SEPARATOR."dictees"; ?>">Dictées</a></li>
                    <li><a href="<?php echo URL."francais".DIRECTORY_SEPARATOR."jeux"; ?>">Jeux</a></li>
                </ul>
            </li>
            <li style="z-index: 9;" ><a href="#" >Mathématiques</a>
                <ul style="margin-top: 12px;">
                    <li><a href="<?php echo URL."mathematiques".DIRECTORY_SEPARATOR."lecons"; ?>">Leçons</a></li>
                    <li><a href="<?php echo URL."mathematiques".DIRECTORY_SEPARATOR."jeux"; ?>">Jeux</a></li>

                </ul>
            </li>
            <li style="z-index: 8"><a href="#">Anglais</a>
                <ul style="margin-top: 12px;">
                    <li><a href="<?php echo URL."anglais".DIRECTORY_SEPARATOR."lecons"; ?>">Leçons</a></li>
                    <li><a href="<?php echo URL."anglais".DIRECTORY_SEPARATOR."jeux"; ?>">Jeux</a></li>
                </ul>
            </li>
            <li style="z-index: 7"><a href="#">Découverte du monde</a>
                <ul style="margin-top: 12px;">
                    <li><a href="<?php echo URL."ddm".DIRECTORY_SEPARATOR."lecons"; ?>">Leçons</a></li>
                    <li><a href="<?php echo URL."ddm".DIRECTORY_SEPARATOR."jeux"; ?>">Jeux</a></li>
                </ul>
            </li>
            <li style="z-index: 6"><a href="<?php echo URL."chorale"; ?>" >Chorales</a></li>
            <li style="z-index: 5"><a href="#">Classe</a>
                <ul style="margin-top: 12px;">
                    <li><a href="<?php echo URL."classe".DIRECTORY_SEPARATOR."devoirs"; ?>">Devoirs</a></li>
                    <li><a href="<?php echo URL."classe".DIRECTORY_SEPARATOR."quadrillage"; ?>">Quadrillage</a></li>
                    <li><a href="<?php echo URL."classe".DIRECTORY_SEPARATOR."ecriture"; ?>">Ecriture</a></li>
                    <li><a href="<?php echo URL."classe".DIRECTORY_SEPARATOR."tbi"; ?>">TBI</a></li>
                    <li><a href="<?php echo URL."classe".DIRECTORY_SEPARATOR."photos"; ?>">Photos</a></li>
                </ul>
            </li>
            <li style="z-index: 4"><a href="<?php echo URL."sortie"; ?>">Sorties</a></li>
            <li style="z-index: 3"><a href="<?php echo URL."connexion"; ?>" style="color: black;">Connexion</a></li>
        </ul>
    </nav>
