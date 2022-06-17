<?php

class Users extends Controller {

    
    public function index()
    {
        // simple message to show where you are
        echo 'Message from Controller: You are in the Controller: User, using the method index().';

        // load a model, perform an action, pass the returned data to a variable
        // NOTE: please write the name of the model "LikeThis"
        

     
        // load views. within the views we can echo out $songs and $amount_of_songs easily
       
        require 'application/views/users/index.php';
        require 'application/views/_templates/footer.php';
    }


	
	
	
	function run()
	{

		if (isset($_POST["run"])) {

			$users_model = $this->loadModel('UsersModel');
		$users_model->run();

		}

		
	}
	
	
	/* logging out the user */
	function logout()
	{
		Session::destroy();
		header('location: index');
		exit;
	}
}