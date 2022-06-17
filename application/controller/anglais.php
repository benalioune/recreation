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
                    
                    break;
                case 'farmfamily':
                    
                    break;
                case 'feel':
                    
                    break;
                case 'clothes':
                    
                    break;
                case 'shoes':
                    
                    break;
                case 'house':
                    
                    break;
            }
	    }
    }
}
