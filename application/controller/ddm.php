<?php

class Ddm extends Controller {

    public function __construct() {
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/footer.php';
    }

    public function index() {
        require 'application/views/ddm/index.php';
    }

    public function lecons(){
        
        }
  

    public function jeux($nomJeu=NULL){
        if ($nomJeu==NULL) {
            require 'application/views/ddm/jeux.php';
        }else{
            switch ($nomJeu) {
                case 'laprehistoire':
                    echo '<iframe src="https://learningapps.org/watch?v=p3va9hx4320" style="border:0px;width:100%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
                    break;
                case 'continent':
                    echo '<iframe src="https://learningapps.org/watch?v=potcehsv320" style="border:0px;width:100%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                        ';
                    
            }
	    }
    }
}
