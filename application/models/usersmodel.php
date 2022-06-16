<?php

class UsersModel 
{

   
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

	public function run()
	{
		
		
        //check if login form is submitted
        if(isset($_POST['login'])){
            //assign variables to post values
            $user = $_POST['username'];
            $password = $_POST['password'];
     
            //get the user with username
            $stmt = $this->db->prepare('SELECT * FROM login WHERE username = :username');
     
            try{
                $stmt->execute(['username' => $username]);
     
                //check if username exist
                if($stmt->rowCount() > 0){
                    //get the row
                    $user = $stmt->fetch();
     
                    //validate inputted password with $user password
                    if(password_verify($password, $user['password'])){
                        //action after a successful login
                        //for now just message a successful login
                        $_SESSION['success'] = 'User verification successful';
                    }
                    else{
                        //return the values to the user
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = $password;
     
                        $_SESSION['error'] = 'Incorrect password';
                    }
     
                }
                else{
                    //return the values to the user
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
     
                    $_SESSION['error'] = 'No account associated with the username';
                }
     
            }
            catch(PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }
     
        }
        else{
            $_SESSION['error'] = 'Fill up login form first';
        }
     
        header('location: index.php');

    }
		
}