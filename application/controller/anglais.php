<?php

class Anglais extends Controller {

    public function __construct() {
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/footer.php';
    }

    public function index() {
        require 'application/views/anglais/index.php';
    }

    public function lecons($nomLecon=NULL){
        if ($nomLecon==NULL) {
            require 'application/views/anglais/lecons.php';
        }else{
            switch ($nomLecon) {
                case 'food':
                    require 'application/views/anglais/lecons/clothes.php';
                    break;
                case 'farm':
                    require 'application/views/anglais/lecons/farm.php';
                    break;
                case 'clothes':
                    require 'application/views/anglais/lecons/clothes.php';
                    break;
                case 'witches':
                    require 'application/views/anglais/lecons/witches.php';
                    break;
            }
        }
    }

    public function jeux($nomJeu=NULL){
        if ($nomJeu==NULL) {
            require 'application/views/anglais/jeux.php';
        }else{
            switch ($nomJeu) {
                case 'colors':
                    echo '<iframe src="https://learningapps.org/watch?v=pcjsqh47t20" style="border:0px;width:100%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
                    break;
                case 'food':
                    echo '<iframe src="https://learningapps.org/watch?v=pv5cme8qa21" style="border:0px;width:100%;height:500px" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
                    break;
                case 'farmfamily':
                    echo '<iframe src="https://learningapps.org/watch?v=pgeqs1qej21" style="border:0px;width:100%;height:500px" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
                    break;
                case 'feel':
                    echo '<iframe src="https://learningapps.org/watch?v=pq8covb0n21" style="border:0px;width:100%;height:500px" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
                    break;
                case 'clothes':
                    echo '<iframe src="https://learningapps.org/watch?v=pgcb0katc21" style="border:0px;width:100%;height:500px" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
                    break;
                case 'shoes':
                        echo '<iframe src="https://learningapps.org/watch?v=ph19j3i4j21" style="border:0px;width:100%;height:500px" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
                    break;
                case 'house':
                    break;
            }
	    }
    }
}
