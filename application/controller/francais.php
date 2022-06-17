<?php

class Francais extends Controller {

    public function __construct() {
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/footer.php';
    }

    public function index() {
        require 'application/views/francais/index.php';
    }

    public function lecons(){
       
            require 'application/views/francais/lecons.php';
       
    }

    public function jeux($nomJeu=NULL){
        if ($nomJeu==NULL) {
            require 'application/views/francais/jeux.php';
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
